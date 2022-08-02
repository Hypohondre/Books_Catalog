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
import api from "../api/api";
import Book from "../components/Book-component";

export default {
    name: "BooksList",
    components: Book,
    data() {
      return {
          books: []
      }
    },
    created() {
        api.books.getAll()
            .then(responce => {
                this.books = responce.data.data;
            })
            .catch(e => {
                console.error(e)
            });
    }
}
</script>

<style scoped>

</style>
