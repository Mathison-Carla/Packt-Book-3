<template>
    <div>
        Hello World
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

