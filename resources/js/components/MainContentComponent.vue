<template>
  <v-app id="inspire">
    <the-side-bar />
    <the-app-bar />
    <the-main-content />
    <the-footer />
  </v-app>
</template>

<script lang="ts">
import Vue from "vue";
import TheSideBar from "./TheSideBar.vue";
import TheAppBar from "./TheAppBar.vue";
import TheMainContent from "./TheMainContent.vue";
import TheFooter from "./TheFooter.vue";

export default Vue.extend({
  name:"MainContentComponent",
  components: {
    TheSideBar,
    TheAppBar,
    TheFooter,
    TheMainContent,
  },
  props: {
    source: String,
  },
  data: () => ({
    drawer: null,
  }),
  mounted() {
    console.log("Component mounted.");
  },
});
</script>
