<template>
    <v-container fluid class="pa-0">
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
                        <h1 class="title-text">Let us do the hard work
                            <span class="title-underline"></span>
                        </h1>

                        <p class="para">Our approach is simple. Real Property Management offices provide professional, trustworthy property management services, from tenant screening to leasing to maintenance to evictions. Whether you are an investor with several rental homes or an unintentional landlord, your local office has your solution.
                        </p>
                    </div>
                </v-col>

                <v-col cols="12" md="6">
                    <div class="info-box">
                        <h1 class="title-text">Profit without the hassle
                            <span class="title-underline"></span>
                        </h1>
                        <p class="para">Owning rental homes can be costly.  The right property management company can make all the difference. For over 30 years, thousands of rental property owners and investors nationwide have trusted Real Property Management offices to take care of their rental property
                        </p>
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
    components: {
            ContactComponent,
            MissionComponent,
            ServicesComponent,

        },
        created() {
            // this.$Progress.start();
        },
        mounted() {
            this.$store.dispatch('app/setLoadingState', false);
        }

}
</script>

<style>

</style>
