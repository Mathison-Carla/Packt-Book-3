<template>
    <div>
      <b-form-input v-model="text" placeholder="Search..."></b-form-input>
      <div class="mt-2">Value: {{ text }}</div>
    </div>
 
</template>

<script>
    export default {
        mounted() {
            console.log('Search Box Mounted')
        },
        data(){
            return{
                search:''
            }
        },
        computed: {
            filteredPools: function(){

            }
        }
    }
</script>