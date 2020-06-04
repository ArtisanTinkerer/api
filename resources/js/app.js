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

Vue.component('todo', require('./components/Todo'));

let app = new Vue({
    el: '#app',
    store,
    router: new VueRouter(routes)
});
