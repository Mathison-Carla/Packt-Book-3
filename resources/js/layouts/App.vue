<template>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>SeatHero</title>
    </head>
    <body class="d-flex flex-column h-100">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark mb-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" >Pack Book 3</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <router-link to="/dashboard" class="nav-link">Dashboard</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/about" class="nav-link">About Us</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/seat/book" class="nav-link">Book a Flights </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/flight/index" class="nav-link">Flights List </router-link>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarShoppingCart" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-cart-shopping"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarShoppingCart">
                                        <a class="dropdown-item" href="/checkout">1 Item</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        User logged
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="/my-reservation">My reservations</a>
                                        <a class="dropdown-item" href="javascript:void(0)" @click="logout">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Begin page content -->
        <main class="flex-shrink-0">
            <div class="container">
                <router-view></router-view>
            </div>
        </main>

        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-muted">© 2023 Company, Inc - contact@seathero.com,</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
            </div>
        </footer>

    </body>
</template>

<script>

import {mapActions} from 'vuex'
export default {
    name:"default-layout",
    data(){

    },
    methods:{
        ...mapActions({
            signOut:"auth/logout"
        }),
        async logout(){
            await axios.post('/logout').then(({data})=>{
                this.signOut()
                this.$router.push({name:"login"})
            })
        }
    }
}

</script>
<style scoped>
main > .container {
    padding: 60px 15px 0;
}
</style>
