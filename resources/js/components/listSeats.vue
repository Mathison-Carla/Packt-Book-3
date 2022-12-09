

<template>
    <div>
      <b-form-select v-model="selected" class="mb-3">
        <b-form-select-option :value="null">Please select an option</b-form-select-option>
        <b-form-select-option value="Nebraska ">Nebraska</b-form-select-option>
        <b-form-select-option value="New York" disabled>New York (disabled)</b-form-select-option>
        <b-form-select-option value="New York" disabled>Wisonsin</b-form-select-option>
        <b-form-select-option value="New York" disabled>Conneticut</b-form-select-option>
        <b-form-select-option value="New York" disabled>Alabama</b-form-select-option>
      </b-form-select>
  
      <div class="mt-2">Selected: <strong>{{ selected }}</strong></div>
    </div>

 <!--CARDS change imagesrc -->
  
  <div>
    <div>
      <h4>Available on SeatHero now</h4>
      <b-card-group deck>
        <b-card img-src="https://placekitten.com/1000/300" img-alt="New York image" img-top>
          <b-card-text>
            Flights to New York
          </b-card-text>
        </b-card>
  
        <b-card img-src="https://placekitten.com/1000/300" img-alt= "Nebraska image" img-bottom>
          <b-card-text>
            Flights to Nebraska
          </b-card-text>
        </b-card>
      </b-card-group>
    </div>
    <div class="mt-4">
      <h4>Left and Right (or Start and End)</h4>
      <b-card img-src="https://placekitten.com/300/300" img-alt="Conneticut image" img-left class="mb-3">
        <b-card-text>
            Flights to Conneticut
        </b-card-text>
      </b-card>
  
      <b-card img-src="https://placekitten.com/300/300" img-alt="Alabama image" img-right>
        <b-card-text>
          Flights to Alabama
        </b-card-text>
      </b-card>
    </div>
  </div>

<!-- end of cards -->

    <script> 

import stateView from './stateView.vue'
    
    export default {
        
        components : listSeats,
    }

    </script>