<template>
  <v-container class="grey lighten-5">
    <v-row justify="center" align="center" style="height: 250px;">
      <v-row justify="center" align="end">
        <v-col lg="2">
          <v-text-field :label='labelName' :rules="rules" hide-details="auto"></v-text-field>
        </v-col>
      </v-row>
    </v-row>
  </v-container>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name: "BaseInputField",
  props:{
    labelName: String
  },
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