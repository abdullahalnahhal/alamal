<template>
  <CrudList name="partner" :crudops="crudOps" :emptyItem="emptyItem"></CrudList>
</template>

<script>
import CrudList from "@/components/CrudList.vue";
import crudOps from "@/api/partners";

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
