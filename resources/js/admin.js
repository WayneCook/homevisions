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
// import JsonExcel from 'vue-json-excel'

//Components
import DashboardComponent from './components/admin/DashboardComponent'
import HomePageComponent from './components/admin/pages/HomePageComponent'
import AboutPageComponent from './components/admin/pages/AboutPageComponent'
import MessagesComponent from './components/admin/MessagesComponent'

// import CustomDatatable from './components/datatable/CustomDatatable'
// import CustomPieChart from './components/charts/CustomPieChart'
// import CustomLineChart from './components/charts/CustomLineChart'

//Admin components
import AdminNavComponent from './components/admin/AdminNavComponent'


Vue.use(VueRouter)
Vue.use(Vuetify)
Vue.use(Vuex)

Vue.component('downloadExcel', JsonExcel)


const vuetify = new Vuetify()
Vue.use(VuetifyConfirm, { vuetify })
// Vue.component('DownloadExcel', JsonExcel)
// Vue.component('CustomDatatable', CustomDatatable)
// Vue.component('CustomPieChart', CustomPieChart)
// Vue.component('CustomLineChart', CustomLineChart)

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: "active",
    routes: [
        { path: "/admin", component: DashboardComponent, name: "dashboard" },
        { path: "/admin/pages/home", component: HomePageComponent, name: "Home-page" },
        { path: "/admin/pages/about", component: AboutPageComponent, name: "about-page" },
        { path: "/admin/messages", component: MessagesComponent, name: "messages" },
      ]
  })


//Root vue instance
const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    router,
    store,
    // store,
    data: () => ({
        drawer: null
      }),
    components: {
        DashboardComponent,
        AdminNavComponent,
        HomePageComponent,
        AboutPageComponent
        // AboutComponent,
        // ContactComponent,
        // BlogComponent,
        // CustomDatatable,
        // CustomPieChart,
        // CustomLineChart
    }
});
