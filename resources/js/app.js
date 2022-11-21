
import './bootstrap';
import { createApp } from 'vue';
import axios from 'axios';
import index from '/js/index.js'

const app = createApp('#app');

app.component('alabama', Alabama);
app.component('index', index)

app.config.globalProperties.$axios=axios 
app.use(router)
app.mount('#app');

createApp({
    components: {
        Alabama,
        NewYork,
        Dashboard,
        Logout,
        Login,
        Register,
        App

    }
}).use(router).mount('#app')

export default router