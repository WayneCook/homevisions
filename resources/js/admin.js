import "@babel/polyfill";
require('./bootstrap');


//Packages
import Vue from 'vue'
import Vuetify from 'vuetify'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import JsonExcel from 'vue-json-excel'

import VuetifyConfirm from 'vuetify-confirm'
import 'vuetify/dist/vuetify.min.css'
import store from './store'

//Components
import DashboardPageComponent from './components/admin/pages/DashboardPageComponent'
import HomePageComponent from './components/admin/pages/HomePageComponent'
import AboutPageComponent from './components/admin/pages/AboutPageComponent'
import MessagesPageComponent from './components/admin/pages/MessagesPageComponent'
import CustomLineChart from './components/charts/CustomLineChart'


//Admin components
import AdminNavComponent from './components/admin/AdminNavComponent'


Vue.use(VueRouter)
Vue.use(Vuetify)
Vue.use(Vuex)

Vue.component('downloadExcel', JsonExcel)


const vuetify = new Vuetify()
Vue.use(VuetifyConfirm, { vuetify })


const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: "active",
    routes: [
        { path: "/admin/dashboard", component: DashboardPageComponent, name: "dashboard" },
        { path: "/admin/pages/home", component: HomePageComponent, name: "Home-page" },
        { path: "/admin/pages/about", component: AboutPageComponent, name: "about-page" },
        { path: "/admin/messages", component: MessagesPageComponent, name: "messages" },
      ]
  })


//Root vue instance
const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    router,
    store,
    data: () => ({
        drawer: null
      }),
    components: {
        DashboardPageComponent,
        AdminNavComponent,
        HomePageComponent,
        AboutPageComponent,
        CustomLineChart
    }
});
