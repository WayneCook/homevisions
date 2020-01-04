<template>
    <v-container fluid class="container-wrapper pa-0 ma-0 d-md-none">

        <div @click="drawer = !drawer"
        v-bind:class="{ 'is-active': drawer}"
        class="hamburger-container hamburger hamburger--3dy"
        >

        <v-icon large color="customDarkBlue">{{ hamburger }}</v-icon>
        </div>

        <v-container class="mobile-nav custom-container d-flex justify-center align-center">

            <div class="logo-wrapper pa-2" @click="redirectToHome">

            <div class="logo-icon mx-auto">
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
                <div class="logo-text mx-auto">
                    <h2 class="logo-home">home</h2>
                    <h2 class="logo-visions">vision</h2>
                    <p ma-0 class="logo-pm">Property Management</p>
                </div>
            </div>

        </v-container>


        <v-navigation-drawer
        v-model="drawer"
        fixed
        height="100vh"
        temporary
        src="/images/menu_image_small.jpg"
        >

        <v-list class="link-list">
            <v-list-item-group color="#9ccee1">

                <v-list-item
                v-for="(link, i) in links"
                :key="i"
                two-line
                router v-bind:to="link.href"
                >

                    <v-icon class="mr-4 align-self-center" color="customDarkBlue">{{ link.icon }}</v-icon>

                    <v-list-item-title class="mobile-nav-links" v-text="link.text"></v-list-item-title>
                </v-list-item>
            </v-list-item-group>
        </v-list>

        </v-navigation-drawer>
    </v-container>
</template>

<script>

import LinkComponent from './LinkComponent'

export default {
    data() {
        return {
            drawer: false,
            links: [
                {text: "Home", href: "/", icon: "mdi-home-outline"},
                {text:"About", href: "/about", icon: "mdi-information-variant"},
                {text:"Property Management", href: "/property-management", icon: "mdi-shield-home-outline"}
            ]
        }
    },
    components: {
        LinkComponent
    },
    methods: {
        redirectToHome() {

            this.$router.push({ name: 'home' }).catch(err => {})
        }
    },
    computed: {
        hamburger() {
            if(this.drawer === false) {
                return 'mdi-menu';
            } else {
                return 'mdi-backburger';
            }
        }
    }
}

</script>

<style scoped>

.link-list {
    margin-top: 100px;
}

    .logo-icon {
        width: 130px;
        margin: 0px 12px;
    }

    .logo-text {
        text-align: center;
        line-height: 1;

    }

    p.logo-pm {
        line-height: 1;
        text-align: center;
    }

    ul {
        list-style-type: none;
    }

    .main-nav {
        position: relative;
        right: 0px;
        width: 100%;
        text-align: right;
        z-index: 9999;
        margin: auto;
    }

    .hamburger-container {
        position: absolute;
        top: 0;
        left: 0;
        margin: 20px;
        z-index: 25;
    }

    .logo-wrapper {
        margin: 10px;
    }

    .mobile-nav-links {

        color: #244f7c;
        font-weight: 500;
    }


</style>
