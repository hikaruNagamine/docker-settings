<template>
  <v-content>
    <h2 class="action_title">Choose Action</h2>
    <card-copy-action />
    <card-run-action />
  </v-content>
</template>

<script lang="ts">
import Vue from "vue";
import CardCopyAction from "./CardCopyActionComponent.vue";
import CardRunAction from "./CardRunActionComponent.vue";


export default Vue.extend({
  name:"ChooseAction",
  components: {
    CardCopyAction,
    CardRunAction,
  },
});
</script>

<style scoped>
.action_title {
  text-align: center;
}
</style>