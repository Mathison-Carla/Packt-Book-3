<template>
    <div class="row h-100 align-items-center">
        <div class="col-6 col-md-6 offset-md-3">
            <div class="card shadow sm">
                <div class="card-body">
                    <h1 class="text-center">Flights List</h1>
                    <hr/>
                        <div class="flex place-content-end mb-4">
                            <div class="px-4 py-2 text-white bg-indigo-600 hover:bg-indigo-700 cursor-pointer">
                                <router-link :to="{ name: 'flight.create' }" class="text-sm font-medium">Create Flight</router-link>
                            </div>
                        </div>
                        <table class="table min-w-full border divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Class</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Origin</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Destination</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Airline</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Actions</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            <template v-for="flight in flights" :key="flight.id">
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ flight.class }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ flight.origin }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ flight.destination }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                        {{ flight.airline }}
                                    </td>

                                    <td class="px-6 py-4 text-sm text-center leading-5 text-gray-900 whitespace-no-wrap">

                                            <router-link :to="{ name: 'flight.edit', params: { id: flight.id } }"
                                                         class="mr-2 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                                Edit</router-link>

                                        <button @click="deleteFligth(flight.id)"
                                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </template>
                            </tbody>
                        </table>
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import useFlights from '../../composable/flights'
import { onMounted } from 'vue';

export default {
    setup() {
        const { flights, getFlights, destroyFligth } = useFlights()

        onMounted(getFlights)

        const deleteFligth = async (id) => {
            if (!window.confirm('You sure?')) {
                return
            }

            await destroyFligth(id)
            await getFlights()
        }

        return {
            flights,
            deleteFligth
        }
    }
}
</script>

<style scoped>

</style>
