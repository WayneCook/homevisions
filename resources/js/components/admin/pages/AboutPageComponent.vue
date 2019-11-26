<template>
    <v-container>

    <v-card color="#009688" dark class="pa-4 mb-8">
        <h1 class="headline">Edit About Page Sections</h1>
    </v-card>
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
            return this.$store.getters['admin/getSections'].filter(section => { return section.page === 'about'});
        }
    },
    mounted() {


    }

}
</script>

<style>

</style>
