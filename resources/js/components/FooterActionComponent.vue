<template>

<v-container class="action-container" v-if='loaded'>
    <v-row class="d-flex justify-end">

        <a :href="`mailto:${getData.companyInfo.email}`" style="text-decoration: none;">
        <v-btn
            class="mx-2"
            fab
            dark
            large
            color="primary"
            >
            <v-icon dark>
                mdi-email
            </v-icon>
            </v-btn>
        </a>

        <a :href="`tel:${getData.companyInfo.phone}`" style="text-decoration: none;">
            <v-btn
            class="mx-2 d-sm-flex d-md-none"
            fab
            dark
            large
            color="success"
            >
            <v-icon dark>
                mdi-phone
            </v-icon>
            </v-btn>

        </a>
            
    </v-row>
</v-container>
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
