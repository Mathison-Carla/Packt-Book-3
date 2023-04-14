<template>
    <div class="row h-100 align-items-center">
        <div class="col-6 col-md-6 offset-md-3">
            <div class="card shadow sm">
                <div class="card-body">
                    <h1 class="text-center">Flights Create</h1>
                    <hr/>
                    <div class="mt-2 mb-6 text-sm text-red-600" v-if="errors !== ''">
                        {{ errors }}
                    </div>

                    <form class="space-y-6" @submit.prevent="saveFlight">
                        <div class="space-y-4 rounded-md shadow-sm">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Time of Departure</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name"
                                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                           v-model="form.time_of_departure">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1">
                                    <input type="text" name="email" id="email"
                                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                           v-model="form.email">
                                </div>
                            </div>

                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <div class="mt-1">
                                    <input type="text" name="address" id="address"
                                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                           v-model="form.address">
                                </div>
                            </div>

                            <div>
                                <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                                <div class="mt-1">
                                    <input type="text" name="website" id="website"
                                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                           v-model="form.website">
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md border border-transparent ring-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring disabled:opacity-25">
                            Create Client
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import useClient from '../../composable/flights'
import { reactive } from 'vue'

export default {
    setup() {
        const form = reactive({
            time_of_departure: '',
            time_of_arrival: '',
            destination: '',
            website: ''
        })

        const { errors, storeFlight } = useClient()

        const saveFlight = async () => {
            await storeFlight({ ...form })
        }

        return {
            form,
            errors,
            saveFlight
        }
    }
}
</script>

<style scoped>

</style>
