import { createRouter, createWebHistory } from "vue-router";
import Home from "../pages/Home.vue";
import Register from "../pages/Register.vue";
import Login from "../pages/Login.vue";
import Dashboard from "../pages/Dashboard.vue";
import Forgot from "../pages/ForgotPassword.vue";

const routes = [
    {
        name: 'home',
        path: '/',
        component: Home,
    },
    {
        name: 'register',
        path: '/register',
        component: Register,
    },
    {
        name: 'login',
        path: '/login',
        component: Login,
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard,
    },
    {
        name: 'forgot',
        path: '/forgot-password',
        component: Forgot,
    }
];

const router = createRouter({
    history : createWebHistory(),
    routes
})


export default router







