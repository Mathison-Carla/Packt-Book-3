import { createRouter, createWebHistory } from "vue-router";
import Home from "../pages/Home.vue";
import Register from "./js/components/Register.vue";
import Login from "./js/components/Login.vue";
import Dashboard from "./js/components/Dashboard.vue";



const router = createRouter ({
    
    
        name: 'home', 
        path: '/',
        component: Home,
    },
    {
        name: 'register', 
        path: './Register',
        component: Register,
    },
    {
        name: 'login', 
        path: './Login',
        component: Login,
    },
    {
        name: 'Logout', 
        path: './Logout',
        component: Logout,
    },
    {
        name: 'dashboard', 
        path: './Dashbard',
        component: Dashboard,
    },


)

export default router


