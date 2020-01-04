<template>
    <v-container v-if="loaded" fluid class="pa-0">
        <v-img
        src="images/services_hero.jpg"
        height="800"
        class="justify-center align-start hero-image d-none d-sm-flex"
        gradient="to top, rgba(255, 255, 255, 0.12), #fafafa"
        position="bottom"
        >
            <v-container class="custom-container content-container">
                <v-row>
                    <v-col class="about-col-left">
                        <div data-aos-delay="800" data-aos="fade-up" class="about-enter-animation">
                        <v-card
                        tile
                        elevation="8"
                        class="mx-auto about-us-card pa-6 pa-sm-12"
                        max-width="700"
                        >
                            <h1 data-aos-delay="900" data-aos="fade-up" class="title-text">{{ getData[5].title }}
                                <span class="title-underline"></span>
                            </h1>

                            <p data-aos-delay="1000" data-aos="fade-up" class="para">{{ getData[5].text  }}</p>
                            <div>
                                <v-btn data-aos-delay="1100" data-aos="fade-up" @click="$store.dispatch('app/setContactDialog', true)" :block="$vuetify.breakpoint.xsOnly" tile class="ma-0 mt-8 contact-btn" large color="customBlue" dark>Contact us</v-btn>
                            </div>
                        </v-card>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </v-img>

        <v-img
        src="images/services_hero_small.jpg"
        gradient="to top, rgba(255, 255, 255, 0.12), #fafafa"
        class="d-flex justify-center align-start hero-image d-flex d-sm-none"
        position="bottom"
        >
            <v-container class="custom-container mt-12">
                <v-row>
                    <v-col class="about-col-left">
                        <div data-aos-delay="800" data-aos="fade-up" class="about-enter-animation">
                        <v-card
                        tile
                        elevation="8"
                        class="mx-auto about-us-card px-6 py-10 pa-sm-12"
                        max-width="700"
                        >
                            <h1 data-aos-delay="900" data-aos="fade-up" class="title-text text-align-left">{{ getData[5].title }}
                                <span class="title-underline"></span>
                            </h1>

                            <p data-aos-delay="1000" data-aos="fade-up" class="para">{{ getData[5].text  }}</p>
                            <div>
                                <v-btn data-aos-delay="1100" data-aos="fade-up" @click="$store.dispatch('app/setContactDialog', true)" :block="$vuetify.breakpoint.xsOnly" tile class="ma-0 mt-8 contact-btn" large color="customBlue" dark>Contact us</v-btn>
                            </div>
                        </v-card>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </v-img>
        <v-container class="custom-container secondary-content">
            <v-row class="large-container mx-auto">
                <div class="mb-4">
                    <h1 data-aos="fade-up" class="title-text text-left d-block px-4">
                        {{ getData[6].title }}
                    </h1>

                    <p data-aos="fade-up" data-aos-delay="200" class="para px-4 py-2">
                         {{ getData[6].text }}
                    </p>
                </div>
            </v-row>
        </v-container>
    </v-container>
</template>

<script>
export default {
    computed: {
            getData() {
                return this.$store.getters['app/getData'].sections.reduce((obj, item) => (obj[item.section_id] = item, obj) ,{})
            },
            loaded() {
                return this.$store.getters['app/getLoaded'];
            }
        }
}
</script>

<style scoped>

.hero-image h1 {
    font-family: "Red Hat Display", sans-serif;
}

.services-card:before {
    content: "";
    display: block;
    position: absolute;
    top: 30px;
    left: 30px;
    width: 100%;
    height: 100%;
    background-color: #2b6490;
    z-index: -1;
}

.large-container {
    max-width: 800px;
}

.content-container {
    margin-top: 100px;
}

</style>
