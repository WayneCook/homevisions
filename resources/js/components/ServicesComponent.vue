<template>
    <v-container fluid class="pa-0">
        <v-row class="d-flex justify-center mb-4">
            <h1 class="title-text" data-aos="fade-up">OUR SERVICES</h1>
        </v-row>


        <v-row class="services-container">
            <v-img
            src="/images/work_desk.jpg"
            lazy-src="/images/work_desk.jpg"
            gradient="to top, rgba(247, 247, 247, 0.19), rgb(247, 247, 247)"
            max-height=700
            class="d-none d-sm-flex"
            >
            <v-container class="custom-container cards-wrapper pa-0">
                <div>
                    <slick ref="slick" :options="slickOptions">
                        <div :key="index" v-for="(card, index) in serviceCards">
                            <v-card
                            class="service-cards"
                            max-width="325"
                            :elevation="13"
                            tile
                            data-aos="fade-up"
                            >
                                <div class="icon-container ">
                                    <v-img :src="card.icon"></v-img>
                                </div>
                                <v-card-text class="custom-card-text">
                                    <ul>
                                        <li data-aos="fade-up" :data-aos-delay="i * 50" class="service-list" :key="i" v-for="(service, i) in card.services">{{ service }}</li>
                                    </ul>
                                </v-card-text>
                                    <v-card-actions>
                                        <v-btn to="/property-management" data-aos="fade-up" text color="customBlue">Learn More</v-btn>
                                    </v-card-actions>
                            </v-card>
                        </div>
                    </slick>
                </div>
            </v-container>
        </v-img>

            <v-img
            src="/images/work_desk_small.jpg"
            lazy-src="/images/work_desk_small.jpg"
            gradient="to top, rgba(247, 247, 247, 0.19), rgb(247, 247, 247)"
            max-height=700
            class="d-flex d-sm-none"
            >
                <v-container class="custom-container cards-wrapper pa-0">
                    <div>
                        <slick ref="slick" :options="slickOptions">
                            <div :key="i" v-for="(card, i) in serviceCards">
                                <v-card
                                class="service-cards"
                                max-width="325"
                                :elevation="10"
                                tile
                                >
                                    <div class="icon-container ">
                                        <v-img :src="card.icon"></v-img>
                                    </div>
                                    <v-card-text class="custom-card-text">
                                        <ul>
                                            <li data-aos="fade-up" :data-aos-delay="i * 50" class="service-list" :key="i" v-for="(service, i) in card.services">{{ service }}</li>
                                        </ul>
                                    </v-card-text>
                                    <v-card-actions>
                                        <v-btn to="/property-management" data-aos="fade-up" text color="customBlue">Learn More</v-btn>
                                    </v-card-actions>
                                </v-card>
                            </div>
                        </slick>
                    </div>
                </v-container>
            </v-img>
        </v-row>
    </v-container>
</template>

<script>

export default {

      data() {
        return {
            animations: ['fade-up-right', 'fade-up', 'fade-up-left'],
            serviceCards: [
                {
                    text: 'card',
                    icon: 'images/icons/document.png',
                    services: [
                        "Marketing/Leasing/Property showings",
                        "Application process-Tenant screening + Selection",
                        "Prepare rental agreements + Addendums",
                        "Rental collections-Property accounting"
                    ]
                },
                {
                    text: 'card',
                    icon: 'images/icons/manage.png',
                    services: [
                        "Property Supervision",
                        "Tentant Services",
                        "Periodic property inspections",
                        "Resident retention-Lease renewals",
                        "Schedule unit turns",
                    ]
                },
                {
                    text: 'card',
                    icon: 'images/icons/law.png',
                    services: [
                        "Prepare and serve legal notices",
                        "Owner/Rental consulting services",
                        "Move out reports",
                        "Organize unlawful detainers"
                    ]
                }
            ],
            slickOptions: {
                //options can be used from the plugin documentation
                // slidesToShow: 1,
                mobileFirst: true,
                centerPadding: '10px',
                infinite: true,
                accessibility: true,
                adaptiveHeight: false,
                arrows: false,
                dots: true,
                draggable: true,
                swipe: true,
                responsive: [
                    {
                    breakpoint: 1023,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,
                        arrows: false,
                        centerPadding: '10px',
                    }
                    },
                    {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        centerPadding: '10px',
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerPadding: '10px',
                    }
                    }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                    }
         }
    }

}
</script>

<style>

.cards-wrapper {
    margin-bottom: 100px;
}

.slick-dots li button:before {
    color: white;
    opacity: 1;
    font-size: 12px;
}

.custom-card-text {
    height: 300px;
}

div.slick-slide {
    padding: 20px;
}

.slick-dots li.slick-active button:before {
    color:#2b6490 !important;
}

h1.title-text.aos-init.aos-animate {
    position: relative;
    z-index: 99999;
}

</style>
