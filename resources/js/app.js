import "@babel/polyfill";
require('./bootstrap')


//Packages
import Vue from 'vue'
import Vuetify from 'vuetify'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import Slick from 'vue-slick'
import VueSweetalert2 from 'vue-sweetalert2'
import store from './store'


//Components
import HomeComponent from './components/HomeComponent'
import AboutComponent from './components/AboutComponent'
import NavComponent from './components/nav/NavComponent'
import MobileNavComponent from './components/nav/MobileNavComponent'
import LoginComponent from './components/LoginComponent'

Vue.use(VueRouter)
Vue.use(Vuetify)
Vue.use(Vuex)
Vue.use(VueSweetalert2);
Vue.component('slick', Slick)




const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: "active",
    routes: [
        { path: "/", component: HomeComponent, name: "home" },
        { path: "/about", component: AboutComponent, name: "about" },
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
                    customDarkBlue: "#28598a"
                }
            }
        }
    }),
    router,
    store,
    // store,
    data: () => ({
        drawer: null,
        loading: false
      }),
    components: {
        HomeComponent,
        NavComponent,
        MobileNavComponent,
        LoginComponent
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
        setTimeout(() => { this.loading = false }, 2000)
        })
      }
});








