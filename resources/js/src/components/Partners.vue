<template>
  <el-select :value="item.field_id" @change="onChange" placeholder="please select partner">
    <el-option
      :label="field.title_en"
      :value="field.id"
      v-for="(field , index) in fields"
      :key="index"
    ></el-option>
  </el-select>
</template>

<script>
import crudOps from "@/api/partners";
export default {
  props: ["item"],
  data() {
    return {
      partners: []
    };
  },
  methods: {
    onChange(id) {
      this.$emit("input", id);
    }
  },
  created() {
    crudOps["get"]().then(data => {
      this.partners = data;
    });
  }
};
</script>

<style>
</style>
