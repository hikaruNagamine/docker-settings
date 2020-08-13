<template>
  <v-container class="grey lighten-5">
    <v-row justify="center" align="center" style="height: 250px;">
      <v-row justify="center" align="end">
        <v-col lg="2">
          <v-text-field label="A input" :rules="rules" hide-details="auto"></v-text-field>
        </v-col>
        <v-col md="auto" align="end">to</v-col>
        <v-col lg="2">
          <v-text-field label="B input" :rules="rules" hide-details="auto"></v-text-field>
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
  }),

  methods: {
    format() {
      return "test";
    },
  },
});
</script>

<style scoped>
</style>