<template>
    <div>
        <v-footer color="indigo" app>
            <span class="white--text">&copy; {{ new Date().getFullYear() }}</span>
        </v-footer>
    </div>
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  name:"TheFooter",
//   components: {
//     EndOrContinueComponent,
//     ChooseActionComponent,
//     TheSideBar,
//   },
//   props: {
//     source: String,
//   },
//   data: () => ({
//     drawer: null,
//   }),
//   mounted() {
//     console.log("Component mounted.");
//   },
});
</script>
