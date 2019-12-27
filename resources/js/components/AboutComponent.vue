<template>

<v-container v-if="loaded" fluid class="pa-0">

    <v-img
    src="images/houses_about.jpg"
    lazy-src="images/houses_about.jpg"
    gradient="to top, rgba(247, 247, 247, 0.19), rgb(247, 247, 247)"
    min-height="700"
    max-height="800"
    class="d-none d-sm-flex"
    >
        <v-container class="custom-container mt-10">
            <v-row>
                <v-col class="about-col-left">
                    <div data-aos-delay="800" data-aos="fade-up" class="about-enter-animation">
                    <v-card
                    tile
                    elevation="8"
                    class="mx-auto about-us-card"
                    max-width="700"
                    >
                        <h1 data-aos-delay="900" data-aos="fade-up" class="title-text">{{ getData[4].title }}
                            <span class="title-underline"></span>
                        </h1>

                        <p data-aos-delay="1000" data-aos="fade-up" class="para">{{ getData[4].text  }}</p>
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
    src="images/houses_about_small.jpg"
    lazy-src="images/houses_about_small.jpg"
    gradient="to top, rgba(247, 247, 247, 0.19), rgb(247, 247, 247)"
    class="d-flex d-sm-none"
    >
        <v-container class="custom-container">
            <v-row>
                <v-col class="about-col-left">

                    <div data-aos-delay="800" data-aos="fade-up">
                    <v-card
                    tile
                    elevation="8"
                    class="mx-auto about-us-card"
                    max-width="700"
                    >
                        <h1 data-aos-delay="900" data-aos="fade-up" class="title-text">{{ getData[4].title }}
                            <span class="title-underline"></span>
                        </h1>

                        <p data-aos-delay="1000" data-aos="fade-up" class="para">{{ getData[4].text  }}</p>
                        <div>
                            <v-btn data-aos-delay="1100" data-aos="fade-up" @click="$store.dispatch('app/setContactDialog', true)" :block="$vuetify.breakpoint.xsOnly" tile class="ma-0 mt-8 contact-btn" large color="customBlue" dark>Contact us</v-btn>
                        </div>
                    </v-card>
                    </div>

                </v-col>
            </v-row>
        </v-container>
    </v-img>

</v-container>


</template>

<script>

export default {
    data() {
        return {
            // loaded: false
        }
    },
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

<style>

</style>
