<template>
    <v-container class="pa-0 custom-container">
        <v-row class="mission-row">
            <v-col data-aos="fade-up" class="pa-4 mission-left-col col-12 col-md-6">

                <v-card
                tile
                elevation="8"
                class="mission-container mx-auto"
                max-width="700"

                >

                    <h1
                    class="title-text"
                    data-aos="fade-up"
                    >

                    {{ getData[1].title }}
                        <span
                        data-aos="fade-up"
                        data-aos-delay="100"
                        class="title-underline"
                        ></span>
                    </h1>
                    <p
                    data-aos="fade-up"
                    data-aos-delay="200"

                    >{{ getData[1].text }}</p>
                    <div
                    data-aos="fade-up"
                    data-aos-delay="300"
                    >
                        <v-btn @click="$store.dispatch('app/setContactDialog', true)" :block="$vuetify.breakpoint.xsOnly" tile class="ma-0 mt-8 contact-btn" large color="customBlue" dark>Contact us</v-btn>
                    </div>

                </v-card>


            </v-col>
            <v-col data-aos="fade-up" class="pt-8 col-12 col-md-6">
            <v-img
            src="/images/handshake_small.jpg"
            lazy-src="/images/handshake_small.jpg"
            class="services-bg d-flex d-sm-none"
            height="300"
            >
            </v-img>

            <v-img
            src="/images/handshake.jpg"
            lazy-src="/images/handshake.jpg"
            class="services-bg d-none d-sm-flex"
            height="400"
            >
            </v-img>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
     computed: {
            getData() {
                return this.$store.getters['app/getData'].sections.reduce((obj, item) => (obj[item.section_id] = item, obj) ,{})
            },

        },
}
</script>

<style>

</style>
