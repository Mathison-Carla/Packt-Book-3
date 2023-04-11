
import './bootstrap';
import { createApp } from 'vue';
import axios from 'axios';
import router from './router/index.js';
import App from './layouts/App.vue';

createApp(App).use(router).mount('#app');



