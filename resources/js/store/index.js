import Vue from 'vue'
import Vuex from 'vuex'

import Property from './modules/propertys'
import Unit from './modules/units'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    property: Property,
    unit: Unit
  }
})  