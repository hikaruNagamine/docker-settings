<template>
  <v-content>
    <h2 class="action_title">Choose Action</h2>
    <v-row>
      <v-col lg="3">
        <card-copy-action @change='change'/>
      </v-col>
      <v-col lg="3">
        <card-run-action @copyMove="copyMove" />
      </v-col>
      <!--
      <v-col lg="3">
        <card-run-action />
      </v-col>
    </v-row>
    <v-row>
      <v-col lg="3">
        <card-copy-action />
      </v-col>
      <v-col lg="3">
        <card-run-action />
      </v-col>
      <v-col lg="3">
        <card-run-action />
      </v-col>
      -->
    </v-row>
  </v-content>
</template>

<script lang="ts">
import Vue from "vue";
import CardCopyAction from "./CardCopyActionComponent.vue";
import CardRunAction from "./CardRunActionComponent.vue";


export default Vue.extend({
  name:"ChooseAction",
  components: {
    CardCopyAction,
    CardRunAction,
  },
  methods: {
    change(){
      this.$emit('change');
    },
    copyMove() {
      this.$emit('copyMove');
    }
  },
  data: function() {
    return {

    }
  }
});
</script>

<style scoped>
.action_title {
  /* text-align: center; */
}
</style>