<template>
  <div>
    <v-list-item link>
      <v-list-item-action>
        <icon-mdi-email />
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Contact</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
  </div>
</template>

<script lang="ts">
import Vue from "vue";
import IconEmail from "./IconEmail.vue";

export default Vue.extend({
  name: "ListenContact",
  components: {
    IconEmail,
  },
});
</script>
