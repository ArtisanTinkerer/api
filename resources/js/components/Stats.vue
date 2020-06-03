<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Book Shorts Stats</h1>


        <ul>
            <li>
                <strong>Total Reviews:</strong> {{ reviews }}
            </li>

            <li>
                <strong>Total Books:</strong> {{ books }}
            </li>

        </ul>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                reviews: 0,
                books: 0

            }
        },
        created() {
            axios.get('/api/stats').then(response => {
                this.reviews = response.data.reviews;
                this.books = response.data.books;
            } );
        }
    };
</script>
