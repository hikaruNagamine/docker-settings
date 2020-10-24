<template>
  <v-container class="grey lighten-5">
    <v-row justify="center" align="end">
      <h2>
        {{title}}
      </h2>
    </v-row>
    <v-row justify="center" align="center" style="height: 250px;">
      <v-row justify="center" align="end">
        <v-col lg="2">
          <v-text-field label="A input" :rules="rules" hide-details="auto"
            v-model="test1" @change="show4Frame"></v-text-field>
        </v-col>
        <v-col md="auto" align="end">to</v-col>
        <v-col lg="2">
          <v-text-field label="B input" :rules="rules" hide-details="auto"
            v-model="test2" @change="show4Frame"></v-text-field>
        </v-col>
      </v-row>
    </v-row>
  </v-container>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name: "BaseInputAToB",
  data: () => ({
    test: "test",
    rules: [(value) => !!value || "必ず入力してください"],
    test1: '',
    test2: ''
  }),
  props:{
    title: String,
  },

  methods: {
    format() {
      return "test";
    },
    show4Frame: function() {
      console.log(this.test1);
      console.log(this.test2)
      if (this.test1 !== '' && this.test2 !== '')
        this.$emit('show4Frame');
    }
  },
});
</script>

<style scoped>
</style>