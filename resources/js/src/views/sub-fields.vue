<template>
  <CrudList name="sub-field" :crudops="crudOps" :emptyItem="emptyItem">
    <template slot-scope="{item}">
      <Fields :item="item" v-model="item.field_id"></Fields>
    </template>
  </CrudList>
</template>

<script>
import CrudList from "@/components/CrudList.vue";
import crudOps from "@/api/subFields";
import Fields from "@/components/Fields";
export default {
  data() {
    return {
      emptyItem: {
        title_ar: "",
        text_ar: "",
        title_en: "",
        text_en: "",
        file_path: "",
        field_id: 1
      },
      crudOps
    };
  },
  components: {
    CrudList,
    Fields
  }
};
</script>
