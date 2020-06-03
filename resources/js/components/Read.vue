<template>
    <div>

        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Read Reviews</h1>


        <ul>
            <li
                v-for="book in books"
                v-text="book.title"
                >
            </li>
        </ul>

    </div>

</template>




<script>
    export default {
        data() {
            return {books: []};
        },
        created() {
            axios.get('/api/books')
                .then(response => {
                    this.books = response.data;
                })

        }

    };
</script>
