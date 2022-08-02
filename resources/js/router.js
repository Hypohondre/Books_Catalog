import {createRouter, createWebHistory} from 'vue-router';
import Books from './components/BooksList'
import Authors from './components/AuthorsList'

export default createRouter({
    routes: [
        {
            path: '/',
            name: 'allAuthors',
            component: Authors
        },
        {
            path: '/all_books',
            name: 'allBooks',
            component: Books
        },
    ],
    history: createWebHistory()
});
