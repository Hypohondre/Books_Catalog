import {createRouter, createWebHistory} from 'vue-router';
import Books from './components/BooksList'
import Authors from './components/AuthorsList'
import BooksByAuthor from './components/BooksByAuthor'

export default createRouter({
    routes: [
        {
            path: '/authors',
            name: 'allAuthors',
            component: Authors
        },
        {
            path: '/books',
            name: 'allBooks',
            component: Books
        },
        {
            path: '/authors/:id',
            name: 'booksByAuthor',
            component: BooksByAuthor
        }
    ],
    history: createWebHistory()
});
