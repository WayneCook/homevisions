<template>
    <div class="top-bar-wrapper container-fluid">

                <div class="top-bar custom-container d-flex d-sm-none justify-end">
                    <div class="phone-info-container">
                    <a class="phone-link" href="tel:1-626-531-7066">
                        <v-icon
                        size='20'
                        color='#696b6cba'
                        >
                            mdi-phone
                        </v-icon>
                        {{ getData.companyInfo.phone }}
                    </a>
                    </div>
                </div>

                <div class="top-bar custom-container d-none d-sm-flex justify-end">
                    <div class="phone-info-container">
                    <v-icon
                    size='20'
                    color='#696b6cba'
                    >
                        mdi-phone
                    </v-icon>
                    {{ getData.companyInfo.phone }}
                    </div>
                </div>

            </div>


</template>

<script>

export default {
    computed: {
            getData() {
                return this.$store.getters['app/getData']
            }
        }
}
</script>

<style>

.content-container {
    margin-top: 100px;
}

</style>
