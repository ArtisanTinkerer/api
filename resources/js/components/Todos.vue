<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Vuex Todo</h1>

        <todo v-for="(todo, index) in todos" :key="index" :todo="todo"></todo>

    </div>

</template>

<script>
import {mapState} from 'vuex';
import todo from './Todo.vue';

export default {


    computed: {
        ...mapState(['todos'])
    },
    components: {
        todo
    }
}

</script>
