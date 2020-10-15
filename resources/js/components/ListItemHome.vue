<template>
  <div>
    <v-list-item link>
      <v-list-item-action>
        <icon-home />
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Home</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
  </div>
</template>
<script lang="ts">
import Vue from "vue";
import IconHome from "./IconHome.vue";

export default Vue.extend({
  name: "ListItemHome",
  components: {
    IconHome,
  },
});
</script>