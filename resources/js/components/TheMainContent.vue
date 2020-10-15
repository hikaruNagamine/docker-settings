<template>
  <div>
    <v-main>
      <v-content>
        <v-container class="fill-height" fluid>
          <v-layout wrap>
            <!-- <end-or-continue-component v-if="false" /> -->
          <choose-action-component />

          <!-- <base-input 
            :title="userImageNameTitle"
            :inputLabelName="userImageNameInputLabel"
          />
          <base-input 
            :title="useInputDockerImage"
            :inputLabelName="useInputDockerImageLable"
          />
          <base-input 
            :title="sucriptRunInContainer"
            :inputLabelName="sucriptRunInContainerLable"
          /> -->
          </v-layout>
        </v-container>
      </v-content>
    </v-main>
  </div>
</template>

<script lang="ts">
import Vue from "vue";
import EndOrContinueComponent from "./EndOrContinueComponent.vue";
import ChooseActionComponent from "./ChooseActionComponent.vue";
import BaseInput from "./BaseInput.vue";
import BaseInputAToB from "./BaseInputAToB.vue";
import BaseInputField from "./BaseInputField.vue";
export default Vue.extend({
  name: "TheMainContent",
  components: {
    EndOrContinueComponent,
    ChooseActionComponent,
    BaseInput,
    BaseInputAToB,
    BaseInputField
  },
  //   props: {
  //     source: String,
  //   },
    data: () => ({
      userImageNameTitle: "input your docker image name",
      userImageNameInputLabel: "your docker image name",
      useInputDockerImage: "Input use Image",
      useInputDockerImageLable: "use docker image",
      sucriptRunInContainer: "Script that runs in a container",
      sucriptRunInContainerLable: "type to script",
    }),
  //   mounted() {
  //     console.log("Component mounted.");
  //   },
});
</script>
