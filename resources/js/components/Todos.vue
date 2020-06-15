<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Todo</h1>
        <button @click="completeAll">Complete All</button>

        <todo v-for="(todo, index) in todos" :key="index" :todo="todo"></todo>

    </div>

</template>

<script>
import {mapState,mapMutations} from 'vuex';
import todo from './Todo.vue';

export default {


    computed: {
        ...mapState(['todos']),
    },
    methods:{
        ...mapMutations(['completeAll'])
    },
    components: {
        todo
    }
}

</script>
