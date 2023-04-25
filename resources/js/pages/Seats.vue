<template>
<!--    <div class="col-12 cold-md-6 pt-5">-->
<!--        <h2>Select a state to travel to and book your flight!</h2>-->
<!--        <label for="location">Location</label>-->
<!--        <select class="form-select" id="location" aria-label="Location">-->
<!--            <option selected>Alabama</option>-->
<!--            <option value="1">New York</option>-->
<!--            <option value="2">Connecticut</option>-->
<!--            <option value="3">Nebraska</option>-->
<!--        </select>-->

<!--        <label for="datetime">Datetime</label>-->
<!--        <select class="form-select" id="datetime" aria-label="Datetime">-->
<!--            <option selected>Alabama</option>-->
<!--            <option value="1">New York</option>-->
<!--            <option value="2">Connecticut</option>-->
<!--            <option value="3">Nebraska</option>-->
<!--        </select>-->

<!--        <label for="class">Class</label>-->

<!--        <select class="form-select" id="class" aria-label="Class">-->
<!--            <option selected>Alabama</option>-->
<!--            <option value="1">New York</option>-->
<!--            <option value="2">Connecticut</option>-->
<!--            <option value="3">Nebraska</option>-->
<!--        </select>-->

<!--        <label for="airport">Airport</label>-->

<!--        <select class="form-select" id="airport" aria-label="Airport">-->
<!--            <option selected>Alabama</option>-->
<!--            <option value="1">New York</option>-->
<!--            <option value="2">Connecticut</option>-->
<!--            <option value="3">Nebraska</option>-->
<!--        </select>-->

<!--    </div>-->

    <div class="container mt-5">
        <div class="row">
            <div v-for="seat in seats" :key="seat.id" class="col-3 mb-3">
                <div :class="['card', {'bg-success': seat.reserved}]">
                    <div class="card-body">
                        <h5 class="card-title">Seat Number-Row: {{ seat.seat_number }}</h5>
                        <p class="card-text">Price: $ {{ seat.price }}</p>
                        <p class="card-text">Class: {{ seat.flight.class }}</p>
                        <button v-if="!seat.reserved" @click="reserveSeat(seat.id)" class="btn btn-primary">Reserve</button>
                        <button v-if="seat.reserved" @click="cancelReservation(seat.id)" class="btn btn-danger">Cancel Reservation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
export default {
    name: "Seats",
    data() {
        return {
            seats: []
        }
    },
    mounted() {
        this.fetchSeats();
    },
    methods: {
        fetchSeats() {
            axios.get('/api/seats')
                .then(response => {
                    console.log("En fetch seats");
                    console.dir(response.data);
                    this.seats = response.data;
                });
        },
        reserveSeat(id) {
                axios.post(`/api/seats/${id}/reserve`)
                .then(response => {
                    this.fetchSeats();
                });
        },
        cancelReservation(id) {
            axios.post(`/api/seats/${id}/cancel`)
                .then(response => {
                    this.fetchSeats();
                });
        }
    }
}
</script>

<style scoped>

</style>
