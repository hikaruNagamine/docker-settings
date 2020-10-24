<template>
  <div>
    <v-main>
      <v-content>
        <v-container class="fill-height" fluid>
          <v-layout wrap>
            <base-input 
              :title="userImageNameTitle"
              :inputLabelName="userImageNameInputLabel"
              @change='frame1Change'
              v-model="imageName"
              v-if="isFrame1"
            />
            <base-input 
              :title="useInputDockerImage"
              :inputLabelName="useInputDockerImageLable"
              @change="frame2Change"
              v-if="isFrame2"
            />
            <choose-action-component
              v-if="isFrame3"
              @change="frame3Change"
              @copyMove="frame7Show"
            />
            <base-input 
              :title="sucriptRunInContainer"
              :inputLabelName="sucriptRunInContainerLable"
              @change="frame4Change"
              v-if="isFrame6"
            />
            <base-input-a-to-b
              :title="copyFileorDirectory"
              v-if="isFrame7"
              @show4Frame="frame4show"
            />
            <end-or-continue-component 
              v-if="isFrame4"
              @continuceClick="frame3Show"
              @endClick="downloadDockerFile"
            />
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
      copyFileorDirectory: "Copy file or directory",
      sucriptRunInContainerLable: "type to script",
      isFrame1: true,
      isFrame2: false,
      isFrame3: false,
      isFrame6: false,
      isFrame7: false,
      isFrame4: false,
      imageName: ""
    }),
  //   mounted() {
  //     console.log("Component mounted.");
  //   },
  methods: {
    frame1Change(value){
      this.isFrame1 = false;
      this.isFrame2 = true;
    },
    frame2Change(){
      this.isFrame2 = false;
      this.isFrame3 = true;
    },
    frame3Change(){
      this.isFrame3 = false;
      this.isFrame6 = true;
    },
    frame7Show() {
      this.isFrame3 = false;
      this.isFrame7 = true;
    },
    frame4Change(){
      this.isFrame6 = false;
      this.isFrame4 = true;
    },
    frame4show(){
      this.isFrame7 = false;
      this.isFrame4 = true;
    },
    frame3Show() {
      this.isFrame4 = false;
      this.isFrame3 = true;
    },
    downloadDockerFile(){
      console.log('download click');
    }
  },
});
</script>
