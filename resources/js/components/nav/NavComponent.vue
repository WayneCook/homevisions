<template>
    <v-container fluid class="container-wrapper pa-0 ma-0 d-none d-md-block">

        <v-container class="main-nav custom-container d-flex justify-space-between align-center">

            <div class="logo-icon">

                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 382 199" style="enable-background:new 0 0 382 199;" xml:space="preserve">

                    <path class="st0 logo-bottom" d="M304.8,67.3l-38.6,18.9l-75.3-40.6L131,77.4l-71.1,37.2L21,95.8l49.4-23.9v1l2-1v-1l-2,1v-45h40.3v25.5l-1,0.5
                        v1.6l2.5-1.3c0.4-0.2,0.6-0.6,0.6-1V52c0-0.4,0.2-0.8,0.6-0.9L190.9,8L304.8,67.3z"/>
                    <polygon class="st1 logo-top" points="363,100.2 190.9,188 79,127 115.1,108.2 190.9,150.4 285.2,100.2 324.1,81.3 "/>
                    <polygon class="st2 logo-middle" points="219.4,79.8 190.9,93.6 162.4,79.8 190.9,66 "/>
                    <polygon class="st2 logo-middle" points="222.9,82.6 222.9,112.5 193.3,126.9 193.3,97 "/>
                    <polygon class="st2 logo-middle" points="188.5,97 188.5,126.9 158.9,112.5 158.9,82.6 "/>
                    </svg>

                </div>
                <div class="logo-text">
                    <h2 class="logo-home">home</h2>
                    <h2 class="logo-visions">vision</h2>
                    <p ma-0 class="logo-pm">Property Management</p>
                </div>

            <ul class="flex-grow-1 d-flex align-center justify-end">
                <link-component :link="link" :key="i" v-for=" (link, i) in list"></link-component>
            </ul>
                    <v-btn @click="$store.dispatch('app/setContactDialog', true)" class="ml-4" tile dark color="hsla(173, 61%, 47%, 1)">contact us</v-btn>
        </v-container>

        <v-dialog
            v-model="this.$store.getters['app/getContactDialog']"
            max-width="450"
            persistent
            >
            <dialog-contact-component></dialog-contact-component>
        </v-dialog>

    </v-container>
</template>

<script>

import LinkComponent from './LinkComponent'
import DialogContactComponent from '../DialogContactComponent'

export default {
    data() {
        return {

            list: [{text: "Home", href: "/"}, {text:"About", href: "/about"}]
        }
    },
    components: {
        LinkComponent,
        DialogContactComponent
    }
}

</script>

<style scoped>


    ul {
        list-style-type: none;
    }

    .container-wrapper {
        position: relative;

    }

    .main-nav {
        margin: auto;
    }

</style>
