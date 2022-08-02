import { createApp } from 'vue';
import Main from '../js/components/MainComponent';

import router from './router';
const app = createApp({});
app.component('hello', Main)
    .use(router)
    .mount('#app');
