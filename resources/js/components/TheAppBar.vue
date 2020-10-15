<template>
    <div>
        <v-app-bar app color="indigo" dark flat>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Docker Settings...</v-toolbar-title>
        </v-app-bar>
    </div>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name:"TheAppBar",
});
</script>
