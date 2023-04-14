import './bootstrap';
import '../sass/app.scss'
import { createApp } from 'vue';
import axios from 'axios';
import router from './router/index.js';
import App from './layouts/App.vue';
import store from './store';

const AppVue = createApp(App)

AppVue.use(store);
AppVue.use(router).mount('#app');
