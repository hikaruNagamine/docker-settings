<template>
  <v-app id="inspire">
    <the-side-bar />

    <v-app-bar app color="indigo" dark flat>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>Docker Settings...</v-toolbar-title>
    </v-app-bar>

    <v-main>
      <v-content>
        <v-container class="fill-height" fluid>
          <v-layout wrap>
            <end-or-continue-component v-if="false" />
            <choose-action-component v-else />
          </v-layout>
        </v-container>
      </v-content>
    </v-main>

    <v-footer color="indigo" app>
      <span class="white--text">&copy; {{ new Date().getFullYear() }}</span>
    </v-footer>
  </v-app>
</template>

<script lang="ts">
import Vue from "vue";
import EndOrContinueComponent from "./EndOrContinueComponent.vue";
import ChooseActionComponent from "./ChooseActionComponent.vue";
import TheSideBar from "./TheSideBar.vue";

export default Vue.extend({
  name:"MainContentComponent",
  components: {
    EndOrContinueComponent,
    ChooseActionComponent,
    TheSideBar,
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
