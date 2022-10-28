<template>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">SeatHero</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId" v-if="isLoggedIn">
                <router-link to="/dashboard">Dashboard</router-link>
                <a class="nav-item nav-link" @click="logout">Logout</a>
            </div>
            </nav>
        </div>

</template>
<script>
    
    export default {

        name:"App",
        data() {
            return 
            isLoggedIn: false
        },     

        created() {

            if(window.Laravel.isLoggedIn) {
                this.isLoggedIn = true
            }
        },

        methods: {
            logout(e) {
                e.preventDefault()
                this.$axios.get('/sanctum/csrf-cookie').then(response => {
                    this.$axios.post('/api/logout')
                    .then(response => {
                        if(response.data.success) {
                            window.location.href = "/"
                        } else {
                            console.log(response);
                        }
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
                })
            }
        },
    }

          



</script>

