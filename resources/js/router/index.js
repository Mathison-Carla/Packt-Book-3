import { createRouter, createWebHistory } from "vue-router";
import Home from "../pages/Home.vue";
import Register from "../pages/Register.vue";
import Login from "../pages/Login.vue";
import Dashboard from "../pages/Dashboard.vue";



const routes = [
    {
        name: 'home',
        path: '/',
        component: Home,
    },
    {
        name: 'register',
        path: '/Register',
        component: Register,
    },
    {
        name: 'login',
        path: '/Login',
        component: Login,
    },
    {
        name: 'dashboard',
        path: '/Dashboard',
        component: Dashboard,
    }];

const router = createRouter({
    history : createWebHistory(),
    routes
})


export default router







