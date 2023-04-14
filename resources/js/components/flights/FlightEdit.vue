<template>
    <div class="row h-100 align-items-center">
        <div class="col-6 col-md-6 offset-md-3">
            <div class="card shadow sm">
                <div class="card-body">
                    <h1 class="text-center">Flights Edit</h1>
                    <hr/>
                    <div class="mt-2 mb-6 text-sm text-red-600" v-if="errors !== ''">
                        {{ errors }}
                    </div>

                    <form class="space-y-6" @submit.prevent="saveFlight">
                        <div class="space-y-4 rounded-md shadow-sm">
                            <div>
                                <label for="time_of_departure" class="block text-sm font-medium text-gray-700">Time of Departure</label>
                                <div class="mt-1">
                                    <input type="text" name="time_of_departure" id="time_of_departure"
                                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                           v-model="flight.time_of_departure">
                                </div>
                            </div>

                            <div>
                                <label for="time_of_arrival" class="block text-sm font-medium text-gray-700">time_of_arrival</label>
                                <div class="mt-1">
                                    <input type="text" name="time_of_arrival" id="time_of_arrival"
                                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                           v-model="flight.time_of_arrival">
                                </div>
                            </div>

                            <div>
                                <label for="origin" class="block text-sm font-medium text-gray-700">Origin</label>
                                <div class="mt-1">
                                    <input type="text" name="origin" id="origin"
                                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                           v-model="flight.origin">
                                </div>
                            </div>

                            <div>
                                <label for="destination" class="block text-sm font-medium text-gray-700">Destination</label>
                                <div class="mt-1">
                                    <input type="text" name="destination" id="destination"
                                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                           v-model="flight.destination">
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md border border-transparent ring-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring disabled:opacity-25">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import useFlights from '../../composable/flights'
import { onMounted } from 'vue';

export default {
    props: {
        id: {
            required: true,
            type: String
        }
    },

    setup(props) {
        const { errors, flight, updateFlight, showFligth } = useFlights();

        onMounted(() => showFligth(props.id))

        const saveFlight = async () => {
            await updateFlight(props.id)
        }

        return {
            errors,
            flight,
            saveFlight
        }
    }
}
</script>

<style scoped>

</style>
