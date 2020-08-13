<template>
    <v-app>
        <v-content>
            <base-input-a-to-b/>
            <v-container fluid fill-height>
                <v-layout wrap>
                    <v-btn color='primary'>Button</v-btn>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script lang="ts">
import Vue from "vue";
import BaseInputAToB from "./BaseInputAToB.vue";

export default Vue.extend({
  components: {
    BaseInputAToB
  },
  mounted() {
   console.log('Component mounted.')
  }
});
</script>
