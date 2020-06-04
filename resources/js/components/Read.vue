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

            // Add a request interceptor
            axios.interceptors.request.use(
                config => {
                    //hardcode this for now, do it the Sanctum way later
                    const token = '2|PuTLcHvrZCIFzLfsjTBDO0jjoX6j1i7cFheKQdfmrGmoDMw9XuEaDNJU6XUhZ9etWZengK7NehUrCTz3';
                    config.headers['Authorization'] = 'Bearer ' + token;
                    return config;
                },
                error => {
                    Promise.reject(error)
                });


            axios.get('/api/books')
                .then(response => {
                    this.books = response.data;
                })

        }

    };
</script>
