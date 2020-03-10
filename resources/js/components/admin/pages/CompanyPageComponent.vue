<template>
    <v-container class="pa-0 ma-0">
        <v-row>
            <v-col class="pa-2">
                <v-card color="white" class="pa-4 elevation-1">
                    <h1 class="headline">Edit Company Info</h1>
                </v-card>
            </v-col>
        </v-row>
        <company-edit-component :companyInfo="getCompanyInfo"></company-edit-component>
    </v-container>
</template>

<script>

    import CompanyEditComponent from './CompanyEditComponent';

export default {
    components: {
        CompanyEditComponent
    },

    computed: {
        getCompanyInfo() {
            return this.$store.getters['admin/getCompanyInfo']
        }
    }

}
</script>

<style>

</style>
