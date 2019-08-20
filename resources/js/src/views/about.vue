<template>
  <div>
    <div class="page-container">
      <el-card class="box-card">
        <div slot="header" class="clearfix">
          <span>About Name</span>
          <el-button
            style="float: right;"
            type="success"
            :loading="aboutUpdating"
            @click="aboutUpdate"
          >Update</el-button>
        </div>
        <el-form :model="about" :rules="rules" label-width="120px" ref="aboutWordForm">
          <el-tabs type="card">
            <el-tab-pane label="ar">
              <el-form-item prop="text_ar">
                <el-input type="textarea" placeholder="Please input" v-model="about.text_ar"></el-input>
              </el-form-item>
            </el-tab-pane>
            <el-tab-pane label="En">
              <el-form-item prop="text_en">
                <el-input type="textarea" placeholder="Please input" v-model="about.text_en"></el-input>
              </el-form-item>
            </el-tab-pane>
          </el-tabs>
        </el-form>
      </el-card>
    </div>
    <CrudList name="section" :crudops="crudOps2" :emptyItem="emptyItem"></CrudList>
  </div>
</template>

<script>
import crudOps from "@/api/aboutWords";
import crudOps2 from "@/api/aboutSections";
import CrudList from "@/components/CrudList.vue";

export default {
  components: {
    CrudList
  },
  data() {
    return {
      emptyItem: {
        title_ar: "",
        text_ar: "",
        title_en: "",
        text_en: ""
      },
      crudOps2,
      aboutUpdating: false,
      about: {
        text_ar: "",
        text_en: ""
      },
      rules: {
        text_ar: [
          {
            required: true,
            message: "This Field Can not Be Empty",
            trigger: "blur"
          }
        ],
        text_en: [
          {
            required: true,
            message: "This Field Can not Be Empty",
            trigger: "blur"
          }
        ]
      }
    };
  },
  methods: {
    async aboutUpdate() {
      this.$refs.aboutWordForm.validate(async valid => {
        if (valid) {
          this.aboutUpdating = true;

          await crudOps["update"](this.about);

          this.aboutUpdating = false;

          this.$message({
            type: "success",
            message: "About Words Updated"
          });
        }
      });
    }
  },
  created() {
    crudOps["get"]().then(data => {
      if (data) {
        this.about = data;
      }
    });
  }
};
</script>