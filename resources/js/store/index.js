import Vue from 'vue'
import Vuex from 'vuex'
import app from './modules/app'
import login from './modules/login'
import admin from './modules/admin'
import messages from './modules/messages'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
  modules: {
    app,
    login,
    admin,
    messages,
  }
})
