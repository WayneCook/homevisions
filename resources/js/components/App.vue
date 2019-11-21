<template>

    <v-container fluid class="main-container pa=0">
        <mobile-nav-component></mobile-nav-component>
        <nav-component></nav-component>

        <router-view></router-view>


    </v-container>

</template>



<script>
import NavComponent from './nav/NavComponent'
import MobileNavComponent from './nav/MobileNavComponent'

export default {
    components: {
        NavComponent,
        MobileNavComponent
    }

}
</script>

<style>

</style>
