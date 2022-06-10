<template>

<v-container fluid class="main-container pa-0">
        <mobile-nav-component></mobile-nav-component>
        <nav-component></nav-component>
        <div class="bottom-nav">
            <h4>Managing San Gabriel Valley Properties</h4>
        </div>

        <transition name="router-anim" mode="out-in" enter-active-class="animated fadeInLeftBig" leave-active-class="animated fadeOutRightBig">
            <router-view></router-view>
        </transition>

        <v-container class="custom-container footer-container">
            <v-row>
                <v-col class="d-flex justify-center mb-8 cols-12 col-sm-6">
                    <div>
                        <v-img class="mx-auto" src="/images/vision_logo.png" width="175" lazy-src="/images/vision_logo.png"></v-img>
                        <br>

                        <!-- <p class="para">Copyright &copy; 2019 HomeVision</p> -->
                    </div>
                </v-col>


                <v-col class="d-flex justify-center cols-12 col-sm-6">
                    <div>
                        <h4 class="title-text footer-title">Sitemap</h4>
                        <ul class="footer-list">
                            <li>
                                <a class="para footer-links" href="/">Home</a>
                            </li>
                            <li>
                                <a class="para footer-links" href="/">About</a>
                            </li>
                            <li>
                                <a class="para footer-links" href="/admin/dashboard">Admins</a>
                            </li>

                        </ul>

                    </div>

                </v-col>
            </v-row>
      
        </v-container>

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

.main-container {
    margin-top: 40px;
}

</style>
