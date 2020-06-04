<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Vuex Counter Demo</h1>
        {{ count }} (The square root is {{ sqrt }})
        <p>
            <button @click="increment">+1</button>
        </p>

    </div>

</template>

<script>
    import {mapState, mapMutations, mapGetters, mapActions} from 'vuex';

    export default {
        computed: {
            ...mapState(['count']),
            ...mapGetters(['sqrt']),

        },


        methods: {
          ...mapActions(['increment'])
        }

    };
</script>
