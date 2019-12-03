<template>
    <v-container class="pa-0 ma-0">
        <v-row>
            <v-col class="pa-2">
                <v-card color="white" class="pa-4 elevation-1">
                    <h1 class="headline">Edit Home Page Sections</h1>
                </v-card>
            </v-col>
        </v-row>
        <section-edit-component :section="section" :key="i" v-for="(section, i) in getSections"></section-edit-component>
    </v-container>
</template>

<script>

    import SectionEditComponent from './SectionEditComponent';

export default {
    components: {
        SectionEditComponent
    },

    computed: {
        getSections() {
            return this.$store.getters['admin/getSections'].filter(section => { return section.page === 'home'});
        }
    },
    mounted() {


    }

}
</script>

<style>

</style>
