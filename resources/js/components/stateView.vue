<!-- loads product view and lists states, displays components -->


<template>
    
    <div class="listSeats"></div>
    <div class="heading"></div>
        <h2>Select a state to travel to and book your flight!</h2>
    <div class="listSeats"></div>
    <input type="selection" v-model="dropdownSelection" />


</template>

<script>
import listSeats from "./listSeats.vue"
import stateView from "./stateView.vue"
export default {
    components : {
        listSeats,
        stateView,
        Nebraska,
        Alabama,
        NewYork,
        Conneticut,
    }};

{
function listSeats()  {

    axios.get(app/Products, {
        params: this.selected, 'time'

    })

        .then((response)=> {

            this.products = response.data.data;
            this.loading = false 
        })


}
} 


</script>