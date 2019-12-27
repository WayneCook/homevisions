<template>
    <v-container v-if="loaded" fluid class="pa-0">
        <v-row pa-0 class="hero-container">
            <v-col class="hero-col">
                <v-img
                src="/images/home_house.jpg"
                lazy-src="/images/home_house.jpg"
                height="500"
                class="d-none d-sm-flex justify-content-start align-center"
                gradient="to right, rgba(255, 255, 255, 0.13), rgba(255, 255, 255, 0.13)"
                >

                <v-container fluid class="custom-container">
                    <v-row>
                        <v-col class="col">
                            <div class="animated-card">

                            <v-card
                            max-width="558"
                            tile
                            class="pa-6 banner-card animated fadeInUp elevation-8"
                            >
                                <h1>Property Management</h1>
                                <h1>in San Gabriel Valley</h1>
                            </v-card>
                                <div class="banner-card-bottom py-4 animated fadeInLeft elevation-8">
                                    <p class="para mx-8 my-0 pa-0">Partner with a specialist, <span>we do the rest.</span></p>
                                </div>
                            </div>
                        </v-col>

                    </v-row>
                </v-container>

                </v-img>

                <v-img
                src="/images/home_house_small.jpg"
                lazy-src="/images/home_house_small.jpg"
                class="d-flex d-sm-none justify-center align-center"
                gradient="to right, rgba(255, 255, 255, 0.13), rgba(255, 255, 255, 0.13)"
                >
                <v-container fluid class="custom-container my-6">
                    <v-row>
                        <v-col class="col">
                            <div class="animated-card">

                            <v-card
                            max-width="558"
                            tile
                            class="pa-6 banner-card banner-card-small animated fadeInUp elevation-8"
                            >
                                <h1>Property Management</h1>
                                <h1>in San Gabriel Valley</h1>
                            </v-card>
                                <div class="banner-card-bottom banner-card-bottom-small py-4 animated fadeInLeft elevation-8">
                                    <p class="para mx-8 my-0 pa-0">Partner with a specialist, <span>we do the rest.</span></p>
                                </div>
                            </div>
                        </v-col>

                    </v-row>
                </v-container>
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
                        <h1 data-aos="fade-up" class="title-text">{{ getData[2].title }}
                            <span data-aos="fade-up" data-aos-delay="100" class="title-underline"></span>
                        </h1>

                        <p data-aos="fade-up" data-aos-delay="200" class="para">{{ getData[2].text }}</p>
                    </div>
                </v-col>

                <v-col cols="12" md="6">
                    <div class="info-box">
                        <h1 data-aos="fade-up" class="title-text">{{ getData[3].title }}
                            <span data-aos="fade-up" data-aos-delay="100" class="title-underline"></span>
                        </h1>
                        <p data-aos="fade-up" data-aos-delay="200" class="para">{{ getData[3].text }}</p>
                    </div>
                </v-col>
            </v-row>
        </v-container>

        <!-- Contact section -->
        <v-container fluid class="pa-0">
            <v-row>
                <v-img
                src="/images/contact_mountians.jpg"
                lazy-src="/images/contact_mountians.jpg"
                min-height="680"
                class="d-none d-sm-flex"
                >
                <v-row class="mb-8">
                    <v-col class="text-center">
                        <h1 data-aos="fade-up" class="title-text ma-8">Leave us a message</h1>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <contact-component data-aos="fade-up"></contact-component>
                    </v-col>
                </v-row>
                </v-img>

                <v-img
                src="/images/contact_mountians_small.jpg"
                lazy-src="/images/contact_mountians_small.jpg"
                class="d-flex d-sm-none"
                >
                <v-row class="mb-8">
                    <v-col class="text-center">
                        <h1 data-aos="fade-up" class="title-text ma-8">Leave us a message</h1>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <contact-component data-aos="fade-up"></contact-component>
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

export default {
    components: {
        ContactComponent,
        MissionComponent,
        ServicesComponent
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

  .bottom-banner h1, .bottom-banner span  {
    font-size: 38px;
    margin: 8px;
    font-weight: 900;
    font-family: "Red Hat Display", sans-serif;
  }

  .banner-card-small h1 {
      font-size: 34px;
  }

  .banner-card-bottom-small p {
      font-size: 18px;
  }

}

</style>
