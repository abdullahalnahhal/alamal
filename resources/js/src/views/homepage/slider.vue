<template>
  <CrudList name="image" :crudops="crudOps" :emptyItem="emptyItem"></CrudList>
</template>

<script>
import CrudList from "@/components/CrudList.vue";
import crudOps from "@/api/slider";

export default {
  data() {
    return {
      emptyItem: {
        title_ar: "",
        text_ar: "",
        title_en: "",
        text_en: "",
        file_path: ""
      },
      crudOps
    };
  },
  components: {
    CrudList
  }
};
</script>

<style>
</style>
