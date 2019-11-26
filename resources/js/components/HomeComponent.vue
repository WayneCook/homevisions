<template>
    <v-container v-if="loaded" fluid class="pa-0">
        <v-row pa-0 class="hero-container">

            <v-col class="hero-col" >

                <v-img
                    src="/images/home_house.jpg"
                    lazy-src="/images/home_house.jpg"
                    height="500"
                >
                </v-img>
            </v-col>

        </v-row>

        <v-container fluid class="bottom-banner">
            <v-row dense>
                <v-col>
                <h1 class="text-center">MAKING LIFE EASY AND <span>PROFITABLE</span></h1>
                </v-col>
            </v-row>
        </v-container>

        <!-- Mission section -->
        <mission-component></mission-component>

        <!-- Services section -->
        <services-component></services-component>


        <v-container class="about-services-container custom-container">
            <v-row>
                <v-col cols="12" md="6" class="d-flex justify-center align-center">
                    <div class="mb-4 info-box">
                        <h1 class="title-text">{{ getData[2].title }}
                            <span class="title-underline"></span>
                        </h1>

                        <p class="para">{{ getData[2].text }}</p>
                    </div>
                </v-col>

                <v-col cols="12" md="6">
                    <div class="info-box">
                        <h1 class="title-text">{{ getData[3].title }}
                            <span class="title-underline"></span>
                        </h1>
                        <p class="para">{{ getData[3].text }}</p>
                    </div>
                </v-col>
            </v-row>
        </v-container>

        <!-- Contact section -->
        <contact-component></contact-component>

    </v-container>

</template>

<script>

import ContactComponent from './ContactComponent'
import MissionComponent from './MissionComponent'
import ServicesComponent from './ServicesComponent'

export default {
    data() {
        return {
            // loaded: false
        }
    },
    components: {
            ContactComponent,
            MissionComponent,
            ServicesComponent,
        },
        created() {

            // this.$store.dispatch('app/fetchData').then((res) => {
            //     if(res) { this.loaded = true }
            // });

        },
        computed: {
            getData() {
                return this.$store.getters['app/getData'].sections.reduce((obj, item) => (obj[item.section_id] = item, obj) ,{})
            },
            loaded() {
                return this.$store.getters['app/getLoaded']
            }
        }
}
</script>

<style>

</style>
