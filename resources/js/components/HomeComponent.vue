<template>
    <v-container v-if="loaded" fluid class="pa-0">
        <v-row pa-0 class="hero-container">
            <v-col class="hero-col">
                <v-img
                src="/images/home_house.jpg"
                srcset="/images/home_house_small.jpg 600w, /images/home_house.jpg 800w"
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
                <v-col cols="12" md="6">
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
        <v-container fluid class="pa-0">
            <v-row>
                <v-img
                src="/images/contact_mountians.jpg"
                srcset="/images/contact_mountians_small.jpg 600w, /images/contact_mountians.jpg 800w"
                min-height="680"
                >
                <v-row class="mb-8">
                    <v-col class="text-center">
                        <h1 class="title-text ma-8">Leave us a message</h1>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <contact-component></contact-component>
                    </v-col>
                </v-row>
                </v-img>
            </v-row>
        </v-container>
    </v-container>

</template>

<script>
import ContactComponent from './ContactComponent'
import MissionComponent from './MissionComponent'
import ServicesComponent from './ServicesComponent'
import DialogContactComponent from './DialogContactComponent'

export default {
    components: {
        ContactComponent,
        MissionComponent,
        ServicesComponent,
        DialogContactComponent
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

@media only screen and (max-width: 360px) {

  .bottom-banner h1 {
      font-size: 38px;
      font-family: "Red Hat Display", sans-serif;
  }

}

</style>
