<template>
  <CrudList name="product" :crudops="crudOps" :emptyItem="emptyItem">
    <template slot-scope="{item}">
      <Partners :item="item" v-model="item.partner_id"></Partners>
    </template>
  </CrudList>
</template>

<script>
import CrudList from "@/components/CrudList.vue";
import crudOps from "@/api/products";
import Partners from "@/components/Partners";
export default {
  data() {
    return {
      emptyItem: {
        title_ar: "",
        text_ar: "",
        title_en: "",
        text_en: "",
        file_path: "",
        partner_id: 1
      },
      crudOps
    };
  },
  components: {
    CrudList,
    Partners
  }
};
</script>
