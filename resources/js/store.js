
export default {

    state: {
        count: 0
    },

    mutations: {
        increment(state)
        {
            state.count++;
        }
    },

    actions: {
        increment (context) {
            setTimeout(() => {
                context.commit('increment')
                },3000);
            context.commit('increment');
        }
    },

    getters: {
        sqrt(state) {
            return Math.sqrt(state.count)
        }
    }

}

