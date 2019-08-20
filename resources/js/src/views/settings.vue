<template>
  <div class="page-container">
    <el-form ref="form" :model="form" label-width="120px">
      <el-form-item label="App Name">
        <el-input v-model="form.name"></el-input>
      </el-form-item>

      <el-form-item>
        <el-button type="primary" @click="onSubmit" :loading="loading">Save</el-button>
      </el-form-item>
    </el-form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: ""
      },
      loading: false
    };
  },
  methods: {
    async onSubmit() {
      this.loading = true;

      await axios.post("/", this.form);

      this.loading = false;
    }
  }
};
</script>