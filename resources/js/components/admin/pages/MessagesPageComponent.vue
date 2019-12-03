<template>
    <v-container class="pa-0 ma-0">
        <v-row>
            <v-col class="pa-2">
                <v-card color="white" class="elevation-1 pa-4">
                    <h1 class="headline">Messages</h1>
                </v-card>
            </v-col>
        </v-row>

        <custom-datatable :title="title" :store="store"></custom-datatable>
    </v-container>
</template>

<script>

    import CustomDatatable from '../CustomDatatable'


export default {
    data() {
        return {
            store: 'messages',
            title: 'Messages Datatable'
        }
    },
    components: {
        CustomDatatable
    }

}
</script>

<style>

</style>
