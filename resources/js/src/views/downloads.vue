<template>
  <CrudList name="download" :crudops="crudOps" :emptyItem="emptyItem"></CrudList>
</template>

<script>
import CrudList from "@/components/CrudList.vue";
import crudOps from "@/api/downloads";

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
