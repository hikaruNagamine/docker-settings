<template>
  <div>
    <v-navigation-drawer v-model="drawer" app>
      <v-list dense>
        <list-item-home />
        <list-item-contact />
      </v-list>
    </v-navigation-drawer>
  </div>
</template>

<script lang="ts">
import Vue from "vue";
import ListItemHome from "./ListItemHome.vue"
import ListItemContact from "./ListItemContact.vue"


export default Vue.extend({
  name:"TheSideBar",
  components: {
    ListItemHome,
    ListItemContact,
  },
  // props: {
  //   source: String,
  // },
  // data: () => ({
  //   drawer: null,
  // }),
  // mounted() {
  //   console.log("Component mounted.");
  // },
});
</script>
