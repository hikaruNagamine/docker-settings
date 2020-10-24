<template>
  <div @click='onClick'>
    <v-icon x-large>mdi-home</v-icon>
    <h2 class="action_title">CARD : Copy Action</h2>
  </div>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name:"CardCopyAction",
  methods: {
    onClick(){
      this.$emit('change');
    }
  },
});
</script>

<style scoped>
.action_title {
  text-align: center;
}
</style>