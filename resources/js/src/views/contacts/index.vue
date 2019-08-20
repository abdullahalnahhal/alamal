<template>
  <div class="page-container" v-loading="loading">
    <el-form ref="form" :model="form" label-width="120px" v-if="!loading">
      <el-form-item label="Address">
        <el-input v-model="form.address.value"></el-input>
      </el-form-item>
      <el-form-item label="Phone">
        <el-input v-model="form.phone.value"></el-input>
      </el-form-item>

      <el-form-item label="Email">
        <el-input v-model="form.email.value"></el-input>
      </el-form-item>

      <el-form-item label="Facebook">
        <el-input v-model="form.facebook.value"></el-input>
      </el-form-item>
      <el-form-item label="Twitter">
        <el-input v-model="form.twitter.value"></el-input>
      </el-form-item>
      <el-form-item label="Instagram">
        <el-input v-model="form.instagram.value"></el-input>
      </el-form-item>
      <el-form-item label="Youtube">
        <el-input v-model="form.youtube.value"></el-input>
      </el-form-item>
      <el-form-item label="Linkedin">
        <el-input v-model="form.linkedin.value"></el-input>
      </el-form-item>
      <el-form-item label="GooglePlus">
        <el-input v-model="form.google_plus.value"></el-input>
      </el-form-item>

      <el-form-item>
        <el-button type="primary" @click="onSubmit" :loading="updating">Save</el-button>
      </el-form-item>
    </el-form>
  </div>
</template>

<script>
import { fontAwesomePicker } from "font-awesome-picker";

import { get, update } from "@/api/contacts";
export default {
  components: {
    fontAwesomePicker
  },
  data() {
    return {
      form: {
        address: {
          value: "",
          icon: ""
        },
        email: {
          value: "",
          icon: ""
        },
        phone: {
          value: "",
          icon: ""
        },
        facebook: {
          value: "",
          icon: ""
        },
        twitter: {
          value: "",
          icon: ""
        },
        instagram: {
          value: "",
          icon: ""
        },
        linkedin: {
          value: "",
          icon: ""
        },
        google_plus: {
          value: "",
          icon: ""
        },
        youtube: {
          value: "",
          icon: ""
        }
      },
      loading: true,
      updating: false
    };
  },
  methods: {
    async onSubmit() {
      this.updating = true;

      await update(this.form);

      this.$notify({
        title: "Success",
        message: "Contacts Updated",
        type: "success"
      });

      this.updating = false;
    }
  },
  created() {
    this.loading = true;
    get().then(data => {
      if (data[0]) {
        this.form = data[0];
      }

      this.loading = false;
    });
  }
};
</script>
