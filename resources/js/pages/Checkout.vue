<template>

    <div class="container">
        <h1>Checkout</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Seat Number</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="seat in reservedSeats" :key="seat.id">
                <td>{{ seat.seat_number }}</td>
                <td>{{ seat.price }}</td>
            </tr>
            </tbody>
        </table>
        <h3>Total: {{ total }}</h3>
        <button @click="placeOrder" class="btn btn-primary">Place Order</button>
    </div>

</template>

<script>
import {mapActions} from "vuex";

export default {
    name: "Checkout",
    data() {
        return {
            reservedSeats: [
                {'seat_number':'508G','price':'4.00',},
                {'seat_number':'509G','price':'4.00',},
                {'seat_number':'510G','price':'4.00',},
                {'seat_number':'511G','price':'4.00',},
                {'seat_number':'512G','price':'4.00',},
            ],
            total: 20
        }

    },
    methods:{
        placeOrder(){
            alert("Order Placed");
        }
    }
}
</script>

<style scoped>

</style>
