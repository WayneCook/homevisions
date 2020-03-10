<template>
    <v-row>
        <v-col class="pa-2">
            <v-card
            class="pa-8 elevation-1 mb-8"
            width="auto"
            >
                <v-card-title class="pa-0 mb-4">Company Info</v-card-title>
                <v-form>
                    <v-text-field
                    v-model="companyInfo.phone"
                    label="Phone"
                    placeholder="Enter phone number"
                    outlined
                    
                    ></v-text-field>

                    <v-text-field
                    v-model="companyInfo.email"
                    label="Email"
                    placeholder="Enter email address"
                    outlined
                    ></v-text-field>

                    <v-text-field
                    v-model="companyInfo.address"
                    label="Address"
                    placeholder="Enter Address"
                    outlined
                    ></v-text-field>



                    <v-btn color="primary" @click="save()" class="mr-4">Save</v-btn>
                </v-form>
            </v-card>

           
        </v-col>
    </v-row>
</template>

<script>
export default {
    props: ['companyInfo'],
    methods: {

        save() {

            console.log(this.companyInfo);

            this.$confirm('Do you really want to save changes?').then(res => {
                if(res) {
                    this.$store.dispatch('admin/updateCompanyInfo', { params: this.companyInfo }).then((success) => {
                        if(success){
                            // this.$store.dispatch('app/fetchData')
                        }
                    })
                }
            })
        }
    },
    computed: {
        getCompany() {
            return this.$store.getters['admin/getCompany']
        }
    }

}
</script>

<style>

</style>
