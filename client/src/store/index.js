import Vue from 'vue'
import Vuex from 'vuex'

import ui from './modules/ui'
import api from './modules/api'

Vue.use(Vuex);

export const vuexConfig = {
  modules: {
    ui,
    api
  },
  state: {

  },
  mutations: {

  },
  actions: {

  }
}

const $store = new Vuex.Store(vuexConfig)

export default $store;