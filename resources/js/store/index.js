import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        todos: [
            { body: 'Go to the store', done: false },
            { body: 'Buy groceries', done: true },
            { body: 'Finish homework', done: false }
        ]
    }
})


