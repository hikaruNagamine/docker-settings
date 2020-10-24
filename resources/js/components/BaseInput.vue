<template>
  <v-container>
    <v-row justify="center" align="center" style="height: 250px;">
      <v-row justify="center" align="end">
        <h2>
          {{title}}
        </h2>
        <base-input-field 
          :labelName="inputLabelName"
          v-model="value"
          @change="onChange"/>
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
    inputText: String,
    title: String,
    inputLabelName: String
  },
  model: {
    prop: 'inputText',
    event: 'valueChange'
  },
  components:{
    BaseInputField
  },
  data() {
    return {
      value:""
    }
  },
  // watch: {
  //   value(){
  //     console.log('this.value',this.value);
  //     this.$emit('valueChange', this.value);
  //   }
  // },
  methods: {
    onChange(){
      // console.log('this.value',this.value);
      // this.$emit('valueChange', this.value);
      this.$emit('change',this.value);
    }
  },
});
</script>