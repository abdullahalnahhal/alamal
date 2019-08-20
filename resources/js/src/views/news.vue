<template>
  <CrudList name="news" :crudops="crudOps" :emptyItem="emptyItem" :formFromParent="true">
    <template slot="inputs" slot-scope="{item , rules , index}">
      <el-form :model="item" :rules="rules" :ref="'item-' + index">
        <el-form-item label="title" prop="title">
          <el-input v-model="item.title"></el-input>
        </el-form-item>

        <ckeditor :editor="editor" v-model="item.text"></ckeditor>
        <el-form-item>
          <el-checkbox v-model="item.published">Published</el-checkbox>
        </el-form-item>
      </el-form>
    </template>
  </CrudList>
</template>

<script>
import Vue from "vue";
import CKEditor from "@ckeditor/ckeditor5-vue";

import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

Vue.use(CKEditor);

import CrudList from "@/components/CrudList.vue";
import crudOps from "@/api/news";

export default {
  data() {
    return {
      editor: ClassicEditor,
      emptyItem: {
        title: "",
        text: "",
        file_path: "",
        published: false
      },
      crudOps
    };
  },
  components: {
    CrudList
  }
};
</script>
