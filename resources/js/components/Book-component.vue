<template>
    <div class="book">
        <div class="title">{{book.title}}</div>
        <div class="year">{{book.year}}</div>
        <div class="authors">
            <span class="author"
                v-for="author in book.authors"
            >
                {{author.name}}
            </span>
        </div>
        <hr>
    </div>
</template>

<script>
export default {
    name: "Book",
    props: ['book']
}
</script>

<style scoped>

</style>
