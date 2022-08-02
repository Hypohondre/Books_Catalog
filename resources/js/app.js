import { createApp } from 'vue';
import Main from '../js/components/MainComponent';

import router from './router';
import Book from "./components/Book-component";
import Author from "./components/Author-component";
const app = createApp({});
app.component('app', Main)
    .component('Book', Book)
    .component('Author', Author)
    .use(router)
    .mount('#app');
