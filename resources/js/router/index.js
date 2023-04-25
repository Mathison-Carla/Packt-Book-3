import { createRouter, createWebHistory } from "vue-router";
import store from '../store';
import Home from "../pages/Home.vue";
import Register from "../pages/Register.vue";
import Login from "../pages/Login.vue";
import Dashboard from "../pages/Dashboard.vue";
import Forgot from "../pages/ForgotPassword.vue";
import FlightIndex from "../components/flights/FlightIndex.vue";
import FlightCreate from "../components/flights/FlightCreate.vue";
import FlightEdit from "../components/flights/FlightEdit.vue";
import About from "../pages/About.vue";
import Seats from "../pages/Seats.vue";
import Checkout from "../pages/Checkout.vue";
import MyReservations from "../pages/MyReservations.vue";

const routes = [
    {
        name: 'home',
        path: '/',
        component: Home,
        meta: {
            middleware: "auth",
            title: `Home`
        }
    },
    {
        name: 'about',
        path: '/about',
        component: About,
        meta: {
            middleware: "guest",
            title: `Home`
        }
    },

    {
        name: 'register',
        path: '/register',
        component: Register,
        meta: {
            middleware: "guest",
            title: `Register`
        }
    },
    {
        name: 'login',
        path: '/login',
        component: Login,
        meta: {
            middleware: "guest",
            title: `Login`
        }
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard,
        meta: {
            middleware: "guest",
            title: `Dashboard`
        }
    },
    {
        name: 'forgot',
        path: '/forgot-password',
        component: Forgot,
        meta: {
            middleware: "guest",
            title: `Forgot`
        }
    },
    {
        name: 'flight.index',
        path: '/flight/index',
        component: FlightIndex,
        meta: {
            middleware: "guest",
            title: `Fligh List`
        }
    },
    {
        name: 'flight.create',
        path: '/flight/create',
        component: FlightCreate,
        meta: {
            middleware: "guest",
            title: `Fligh Create`
        }
    },
    {
        name: 'flight.edit',
        path: '/flight/edit',
        component: FlightEdit,
        props: true,
        meta: {
            middleware: "guest",
            title: `Fligh Edit`
        }
    },
    {
        name: 'seats',
        path: '/seat/book',
        component: Seats,
        props: true,
        meta: {
            middleware: "guest",
            title: `Book a flight`
        }
    },
    {
        name: 'checkout',
        path: '/checkout',
        component: Checkout,
        props: true,
        meta: {
            middleware: "guest",
            title: `Checkout`
        }
    },
    {
        name: 'my-reservation',
        path: '/my-reservation',
        component: MyReservations,
        props: true,
        meta: {
            middleware: "guest",
            title: `My reservations`
        }
    }
];

const router = createRouter({
    history : createWebHistory(),
    routes
})

router.beforeEach((to, from, next) => {
    document.title = to.meta.title
    if (to.meta.middleware === "guest") {
        if (store.state.auth.authenticated) {
            next({ name: "dashboard" })
        }
        next()
    } else {
        if (store.state.auth.authenticated) {
            next()
        } else {
            next({ name: "login" })
        }
    }
})


export default router







