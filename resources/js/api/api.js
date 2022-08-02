import instance from './instance';
import books from './books';
import authors from "./authors";

export default {
    books: books(instance),
    authors: authors(instance)
}
