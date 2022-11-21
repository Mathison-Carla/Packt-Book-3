<template>
    <div>Available Seats</div>
    <list-seats>Alabama: 3 window seats available</list-seats>
    <list-seats>New York: 10 hall seats available</list-seats>
    <list-seats>Conneticut: No seats available</list-seats>
    <list-seats>Wisconsin: 1 hall seat and 1 window seat available</list-seats>
    <list-seats>Nebraska: 29 total seats available</list-seats>
   
    

    </template>
    
    <script> 
    import stateView from './stateView.vue'
    export default {
        components : stateView,
        components : listSeats,
}

    </script>