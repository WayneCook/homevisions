require('./bootstrap');


//Packages
import Vue from 'vue'
import Vuetify from 'vuetify'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import Slick from 'vue-slick'

import VueProgressBar from 'vue-progressbar'


import 'vuetify/dist/vuetify.min.css'
import store from './store'
// import JsonExcel from 'vue-json-excel'

//Components
// import NavComponent from './components/NavComponent'
import HomeComponent from './components/HomeComponent'
import AboutComponent from './components/AboutComponent'
import NavComponent from './components/nav/NavComponent'
import MobileNavComponent from './components/nav/MobileNavComponent'
import MissionComponent from './components/MissionComponent'
import ServicesComponent from './components/ServicesComponent'
import ContactComponent from './components/ContactComponent'
import LoginComponent from './components/LoginComponent'
import DashboardComponent from './components/admin/DashboardComponent'
// import AboutComponent from './components/About'
// import ContactComponent from './components/Contact'
// import BlogComponent from './components/Blog'
// import CustomDatatable from './components/datatable/CustomDatatable'
// import CustomPieChart from './components/charts/CustomPieChart'
// import CustomLineChart from './components/charts/CustomLineChart'

//Admin components
import AdminNavComponent from './components/admin/AdminNavComponent'


Vue.component('slick', Slick)

Vue.use(VueRouter)
Vue.use(Vuetify)
Vue.use(Vuex)
// Vue.component('DownloadExcel', JsonExcel)
// Vue.component('CustomDatatable', CustomDatatable)
// Vue.component('CustomPieChart', CustomPieChart)
// Vue.component('CustomLineChart', CustomLineChart)


const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: "active",
    routes: [
        { path: "/", component: HomeComponent, name: "home" },
        { path: "/about", component: AboutComponent, name: "about" },
        { path: "/admin-login", component: LoginComponent, name: "adminlogin" },
        { path: "/admin", component: DashboardComponent, name: "dashboard" },
        // { path: '/about', component: AboutComponent },
        // { path: '/contact', component: ContactComponent },
        // { path: '/blog', component: BlogComponent },
      ]
  })



  const options = {
    color: 'rgb(47, 193, 176)',
    failedColor: '#874b4b',
    thickness: '4px',
    transition: {
      speed: '0.2s',
      opacity: '0.6s',
      termination: 1200
    },
    autoRevert: true,
    location: 'top',
    inverse: false
  }

  Vue.use(VueProgressBar, options)



//Root vue instance
const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
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
        MissionComponent,
        ServicesComponent,
        ContactComponent,
        Slick,
        AdminNavComponent,
        LoginComponent,
        DashboardComponent
        // AboutComponent,
        // ContactComponent,
        // BlogComponent,
        // CustomDatatable,
        // CustomPieChart,
        // CustomLineChart
    },
    mounted () {
        //  [App.vue specific] When App.vue is finish loading finish the progress bar
        this.$Progress.finish()
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




