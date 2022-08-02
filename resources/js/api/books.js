export default function (instance) {
    return {
        getAll() {
            return instance.get('/api/books')
        },
        getByAuthor(id) {
            return instance.get('/api/books/author/' + id)
        }
    }
}
