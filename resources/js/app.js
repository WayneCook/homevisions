require('./bootstrap');


//Packages
import Vue from 'vue'
import Vuetify from 'vuetify'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import Slick from 'vue-slick'


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
        // { path: '/about', component: AboutComponent },
        // { path: '/contact', component: ContactComponent },
        // { path: '/blog', component: BlogComponent },
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
        HomeComponent,
        NavComponent,
        MobileNavComponent,
        MissionComponent,
        ServicesComponent,
        ContactComponent,
        Slick,
        AdminNavComponent,
        // AboutComponent,
        // ContactComponent,
        // BlogComponent,
        // CustomDatatable,
        // CustomPieChart,
        // CustomLineChart
    }
});
