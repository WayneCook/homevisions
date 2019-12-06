<template>

    <v-container class="pa-0 custom-container">
        <v-row class="mission-row">
            <v-col class="pa-4 mission-left-col"
            pa='4'
            md='6'
            lg='6'
            sm='12'
            >

                <v-card
                tile
                elevation="8"
                class="mission-container mx-auto"
                max-width="700"
                >
                    <h1 class="title-text">{{ getData[1].title }}
                        <span class="title-underline"></span>
                    </h1>
                    <p>{{ getData[1].text }}</p>


                    <div class="my-2">
                        <v-btn @click="$store.dispatch('app/setContactDialog', true)" tile class="ma-0 mt-4 contact-btn" large color="hsla(173, 61%, 47%, 1)" dark>Contact us</v-btn>
                    </div>
                </v-card>

            </v-col>

            <v-col class="pt-8 md-12 lg-6"
            pa='4'
            md='6'
            lg='6'
            sm='12'
            >

            <v-img
            src="/images/handshake.jpg"
            srcset="/images/handshake_small.jpg 600w, /images/handshake.jpg 800w"
            class="services-bg"
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
