<template>
  <div class="page-container" v-loading="loading">
    <el-row style="margin-bottom:2rem;" v-if="!loading">
      <el-col :span="6">
        <el-button type="primary" @click="add">Add More</el-button>
      </el-col>
    </el-row>

    <el-collapse v-model="activeNames" v-if="!loading">
      <el-card class="box-card" v-for="(item , index) in items" :key="index">
        <slot :item="item"></slot>
        <el-button-group style="float:right">
          <el-button
            :type="item.new ?'success': 'warning'"
            :icon="item.new ?'el-icon-plus': 'el-icon-edit'"
            @click="update(item , index)"
            :loading="item.updateLoading"
          >{{ item.new ? 'Add' : 'Update'}}</el-button>
          <el-button type="danger" icon="el-icon-delete" @click="remove(item)">Delete</el-button>
        </el-button-group>
        <el-collapse-item :title="'#' + (index + 1) + ' ' + name" :name="index">
          <slot name="inputs" :item="item" :rules="rules" :index="index">
            <el-form :model="item" :rules="rules" :ref="'item-' + index">
              <el-tabs type="card" :stretch="true">
                <el-tab-pane label="ar">
                  <el-form-item :label="name.toUpperCase() + ' Name'" prop="title_ar">
                    <el-input v-model="item.title_ar"></el-input>
                  </el-form-item>
                  <el-form-item :label="name.toUpperCase() + ' Description'" prop="text_ar">
                    <el-input type="textarea" placeholder="Please input" v-model="item.text_ar"></el-input>
                  </el-form-item>
                </el-tab-pane>
                <el-tab-pane label="En">
                  <el-form-item :label="name.toUpperCase() + ' Name'" prop="title_en">
                    <el-input v-model="item.title_en"></el-input>
                  </el-form-item>
                  <el-form-item :label="name.toUpperCase() + ' Description'" prop="text_en">
                    <el-input type="textarea" placeholder="Please input" v-model="item.text_en"></el-input>
                  </el-form-item>
                </el-tab-pane>
              </el-tabs>
            </el-form>
          </slot>
          <slot name="fileList">
            <el-upload
              :action="upload.action"
              :headers="upload.headers"
              :on-remove="(resp) => removeFile(resp.name , item)"
              :on-success="(resp) => fileUploaded(resp.name , item)"
              :multiple="false"
              :fileList="item.fileList"
              :limit="1"
              list-type="picture-card"
            >
              <i class="el-icon-plus"></i>
            </el-upload>
            <div
              class="el-form-item__error"
              style="position:relative;"
              v-if="!item.upload_valid"
            >Please select File</div>
          </slot>
        </el-collapse-item>
      </el-card>
    </el-collapse>
  </div>
</template>

<script>
import { remove } from "@/api/media";
import { getToken } from "@/utils/auth";
export default {
  props: {
    crudops: {
      type: Object
    },
    name: {
      type: String
    },
    emptyItem: {
      type: Object
    },
    formFromParent: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      activeNames: [0],
      items: [],
      loading: false,
      rules: {},
      upload: {
        action: process.env.VUE_APP_BASE_API + "/media/upload",
        headers: {
          Authorization: `Bearer ${getToken()}`
        }
      }
    };
  },
  methods: {
    update(item, index) {
      let formName = `item-${index}`;

      let form = this.formFromParent
        ? this.$parent.$refs[formName]
        : this.$refs[formName][0];
      form.validate(async valid => {
        if (item.file_path === null || item.file_path === "") {
          item.upload_valid = false;

          return;
        }

        if (valid) {
          item.updateLoading = true;

          let op = this.crudops[item.new ? "add" : "update"];

          await op(item);

          item["new"] = false;

          item.updateLoading = false;

          this.$message({
            type: "success",
            message: this.name + " " + (item.new ? "created" : "updated")
          });
        }
      });
    },
    add() {
      this.items.push({
        ...this.emptyItem,
        new: true,
        updateLoading: false,
        uploadValid: true
      });
    },
    prepareRules() {
      let rules = {};

      Object.keys(this.emptyItem).map(name => {
        rules[name] = {
          required: true,
          message: "This Field Can not Be Empty",
          trigger: "blur"
        };
      });

      this.rules = rules;
    },
    remove(item) {
      this.$confirm("Are You Sure Uou Want To Delete ?", "danger", {
        confirmButtonText: "OK",
        cancelButtonText: "Cancel",
        type: "danger"
      })
        .then(async () => {
          if (!item.new) {
            await this.crudops["remove"](item.id);
          }

          this.items.splice(item, 1);

          this.$message({
            type: "success",
            message: "Delete completed"
          });
        })
        .catch(() => {
          this.$message({
            type: "info",
            message: "Delete canceled"
          });
        });
    },
    removeFile(name, item) {
      remove(name);

      item.file_path = "";

      item.upload_valid = false;
    },
    fileUploaded(name, item) {
      item.file_path = name;

      item.upload_valid = true;
    }
  },
  mounted() {
    this.loading = true;

    let domainUrl = new URL("http://alamal.localhost/en/admin/null").origin;
    this.crudops["get"]().then(data => {
      this.items = data.map(item => {
        return {
          ...item,
          new: false,
          updateLoading: false,
          uploadValid: true,
          fileList: [{ url: domainUrl + "/storage/" + item.file_path }]
        };
      });

      this.loading = false;
    });

    this.prepareRules();
  }
};
</script>