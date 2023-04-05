
import './bootstrap';
import { createApp } from 'vue';
import axios from 'axios';
import router from './router/index.js'
import Alabama from "./components/Alabama.vue";
import NewYork from "./components/NewYork.vue";

Vue.use(VueRouter)

const app = createApp('#app');

const routes = [

    { path: '/', component: require('./components/Alabama.vue') },
    { path: '/user', component: require('./components/NewYork.vue') }
]

app.component('alabama', Alabama);
app.component('newyork', NewYork);
app.component('index', index)

app.config.globalProperties.$axios=axios

const App = createApp({
    components: {
        Alabama,
        NewYork,
        Dashboard,
        Logout,
        Login,
        Register,
        App

    }
});


app.mount('#app');



