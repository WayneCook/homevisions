<template>

<v-container fluid class="pa-0">

    <v-img
    src="/images/houses_about.jpg"
    lazy-src="/images/houses_about.jpg"
    gradient="to top, rgba(247, 247, 247, 0.19), rgb(247, 247, 247)"
    height="700"
    >

<v-container class="custom-container mt-10">

    <v-row>

        <v-col class="about-col-left" >

            <v-card
            tile
            elevation="8"
            class="mx-auto about-us-card"
            max-width="700"
            >
                <h1 class="title-text">About Us
                    <span class="title-underline"></span>
                </h1>


                <p class="para">Based out of the San Gabriel Valley and 15 years in California Property Management business, we continue thrive in the dynamic fast paced housing market.
                    Our expertise and knowledge for any changes, updates in our management business is consistently achieved.
                    At Home Visions Property Management we understand your hard work investments. We dedicate ourselves in providing highest quality housing.
                </p>

                <!-- <v-img
                src="/images/team_image.jpg"
                lazy-src="/images/team_image.jpg"
                gradient="to right top, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.23)"

                >
                </v-img> -->

            </v-card>

                </v-col>




            </v-row>
        </v-container>
    </v-img>
</v-container>


</template>

<script>
export default {

    mounted() {
        this.$store.dispatch('app/setLoadingState', false);
    }

}
</script>

<style>

</style>
