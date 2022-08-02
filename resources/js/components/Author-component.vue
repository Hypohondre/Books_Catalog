<template>
    <div class="author">
        <div class="name">{{author.name}}</div>
        <div class="count"><router-link :to="{ name: 'booksByAuthor', params: { id: author.id }}">Количество книг: {{author.books_count}}</router-link></div>
        <hr>
    </div>
</template>

<script>
export default {
    name: "Author",
    props: ['author']
}
</script>

<style scoped>

</style>
