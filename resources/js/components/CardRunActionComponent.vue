<template>
  <div @click="clickEvent">
    <v-icon x-large>mdi-home</v-icon>
    <h2 class="action_title">CARD : Run Action</h2>
  </div>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name:"CardRunAction",
  methods: {
    clickEvent: function() {
      this.$emit('copyMove');
    }
  }
});
</script>

<style scoped>
.action_title {
  text-align: center;
}
</style>