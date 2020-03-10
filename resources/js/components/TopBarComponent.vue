<template>
    <div class="top-bar-wrapper container-fluid" v-if='loaded'>

        <div class="top-bar custom-container d-flex d-sm-none justify-end">
            <div class="phone-info-container">
            <a class="phone-link" :href="`tel:${getData.companyInfo.phone}`">
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
            },
            loaded() {
                return this.$store.getters['app/getLoaded']
            }
        }
}
</script>

<style>

.content-container {
    margin-top: 100px;
}

</style>
