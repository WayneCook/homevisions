import "@babel/polyfill";
require('./bootstrap')

//Packages
import Vue from 'vue'
import Vuetify from 'vuetify/dist/vuetify.min'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import Slick from 'vue-slick'
import VueSweetalert2 from 'vue-sweetalert2'
import store from './store'

import AOS from 'aos';
import 'aos/dist/aos.css';


//Components
import HomeComponent from './components/HomeComponent'
import AboutComponent from './components/AboutComponent'
import NavComponent from './components/nav/NavComponent'
import MobileNavComponent from './components/nav/MobileNavComponent'
import LoginComponent from './components/LoginComponent'
import PropertyManagementComponent from './components/PropertyManagementComponent'
import TopBarComponent from './components/TopBarComponent'
import FooterActionComponent from './components/FooterActionComponent'

Vue.use(VueRouter)
Vue.use(Vuetify)
Vue.use(Vuex)
Vue.use(VueSweetalert2)
Vue.component('slick', Slick)

Vue.config.devtools = false
Vue.config.productionTip = false

AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 0, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 1200, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  });



const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: "active",
    routes: [
        { path: "/", component: HomeComponent, name: "home" },
        { path: "/about", component: AboutComponent, name: "about" },
        { path: "/property-management", component: PropertyManagementComponent, name: "property-management" },
        { path: "/admin-login", component: LoginComponent, name: "adminlogin" }
      ]
  })

//Root vue instance
const app = new Vue({
    el: '#app',
    vuetify: new Vuetify({
        theme: {
            themes: {
                light: {
                    customBlue: '#00bcd4',
                    customDarkBlue: "#2b6490"
                }
            }
        }
    }),
    router,
    store,
    data: () => ({
        drawer: null,
        loading: false
      }),
    components: {
        HomeComponent,
        NavComponent,
        MobileNavComponent,
        TopBarComponent,
        LoginComponent,
        FooterActionComponent
    },
    mounted () {
        //  [App.vue specific] When App.vue is finish loading finish the progress bar
        setTimeout(() => { this.loading = false }, 2000)
      },
      created () {

        this.$store.dispatch('app/fetchData');
        //  [App.vue specific] When App.vue is first loaded start the progress bar

        this.loading = true
        //  hook the progress bar to start before we move router-view
        this.$router.beforeEach((to, from, next) => {
          //  start the progress bar
          this.loading = true
          //  continue to next page
          next()
        })
        //  hook the progress bar to finish after we've finished moving router-view
        this.$router.afterEach((to, from) => {
          //  finish the progress bar
        setTimeout(() => { this.loading = false }, 1800)
        })
      }
});








