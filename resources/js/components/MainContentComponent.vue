<template>
    <v-app>
        <v-content>
            <v-container fluid fill-height>
                <v-layout wrap>
                    <header-component></header-component>
                    <side-component></side-component>
                    <endorcontinue-component></endorcontinue-component>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
