import Vue from 'vue'
import App from './App'
window.$=window.jQuery=require('jquery')
import 'bootstrap'
window.axios='axios'
  import 'bootstrap/dist/css/bootstrap.min.css'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
Vue.config.productionTip = false
import {routes} from './router/index'
const router = new VueRouter({
	routes,
	mode:'history'
})
import Vuex from 'vuex'
import CKEditor from 'ckeditor4-vue';

Vue.use( CKEditor );
Vue.use(Vuex)
import { storage } from './store/index'
const store = new Vuex.Store(storage)
/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  render: h => h(App)
})
