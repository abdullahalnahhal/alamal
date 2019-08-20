<template>
  <el-select :value="item.field_id" @change="onChange" placeholder="please select field">
    <el-option
      :label="field.title_en"
      :value="field.id"
      v-for="(field , index) in fields"
      :key="index"
    ></el-option>
  </el-select>
</template>

<script>
import crudOps from "@/api/fields";
export default {
  props: ["item"],
  data() {
    return {
      fields: []
    };
  },
  methods: {
    onChange(id) {
      this.$emit("input", id);
    }
  },
  created() {
    crudOps["get"]().then(data => {
      this.fields = data;
    });
  }
};
</script>

<style>
</style>
