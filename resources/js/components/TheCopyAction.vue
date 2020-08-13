<template>
  <v-content>
    <h2 class="action_title">Copy file or Directory</h2>
    <base-input-a-to-b />
  </v-content>
</template>

<script lang="ts">
import Vue from "vue";
import BaseInputAToB from "./BaseInputAToB.vue";

export default Vue.extend({
  name:"TheCopyAction",
  components: {
    BaseInputAToB,
  },
});
</script>

<style scoped>
.action_title {
  text-align: center;
}
</style>