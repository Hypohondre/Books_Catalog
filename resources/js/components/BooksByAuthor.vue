<template>
    <div>
        <book
            v-for="book in books"
            :key="book.id"
            :book="book"
        />
    </div>
</template>

<script>
import Book from "../components/Book-component";
import api from "../api/api";

export default {
    name: "BooksByAuthor",
    components: Book,
    data() {
        return {
            books: []
        }
    },
    created() {
        api.books.getByAuthor(this.$route.params.id)
            .then(responce => {
                this.books = responce.data.data;
            })
            .catch(e => {
                console.error(e);
            });
    }
}
</script>

<style scoped>

</style>
