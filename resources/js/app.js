import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import routes from './routes';

import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


Vue.use(VueRouter)
Vue.use(Vuex)

import store from './store';


let app = new Vue({
    el: '#app',
    store: new Vuex.Store(store),
    router: new VueRouter(routes)
});
