<template>
  <v-layout wrap>
    <v-btn class="pa-2" outlined color="secondary" @click="onEndClick">End</v-btn>
    <h1>　or　</h1>
    <v-btn class="pa-2" outlined color="indigo" @click="onContinueClick">Continue</v-btn>
  </v-layout>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name: "EndOrContinueComponent",
  data: () => ({
    test: "test",
    rules: [(value) => !!value || "必ず入力してください"],
  }),

  methods: {
    format() {
      return "test";
    },
    onContinueClick() {
      this.$emit('continuceClick');
    },
    onEndClick(){
      this.$emit('endClick');
    }
  },
});
</script>

<style scoped>
</style>
