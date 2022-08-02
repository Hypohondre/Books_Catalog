<template>
    <div>
        <author
            v-for="author in authors"
            :key="author.id"
            :author="author"
        />
    </div>
</template>

<script>
import api from "../api/api";
import author from "../components/Author-component";

export default {
    name: "AuthorsList",
    components: author,
    data() {
        return {
            authors: []
        }
    },
    created() {
        api.authors.getAll()
            .then(responce => {
                this.authors = responce.data.data;
            })
            .catch(e => {
                console.error(e)
            });
    }
}
</script>

<style scoped>

</style>
