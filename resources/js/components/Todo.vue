<template>

    <li class="todo">
        <input type="checkbox" :checked="todo.done">
        <label v-text="todo.body"></label>
        <button @click="deleteTodo(todo)">x</button>
    </li>


</template>

<script>
    import { mapMutations } from 'vuex';


export default {
    props: ['todo'],

    methods:mapMutations (['deleteTodo'])
}

</script>
