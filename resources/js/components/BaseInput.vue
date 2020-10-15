<template>
  <v-container>
    <v-row justify="center" align="center" style="height: 250px;">
      <v-row justify="center" align="end">
        <h2>
          {{title}}
        </h2>
        <base-input-field :labelName="inputLabelName" />
      </v-row>
    </v-row>
  </v-container>
</template>

<script lang="ts">
import Vue from "vue";
import BaseInputField from "./BaseInputField.vue";

export default Vue.extend({
  name: "BaseInput",
  props:{
    title: String,
    inputLabelName: String
  },
  components:{
    BaseInputField
  },
  // data() {
  //   return {
  //     title:"aiue"
  //   }
  // },
});
</script>