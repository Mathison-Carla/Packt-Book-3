import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

export default function useFlights() {
    const flight = ref([])
    const flights = ref([])

    const errors = ref('')
    const router = useRouter()

    const getFlights = async () => {
        let response = await axios.get('/api/flights')
        flights.value = response.data.data
    }

    const showFlight = async (id) => {
        let response = await axios.get(`/api/flights/${id}`)
        flight.value = response.data.data
    }

    const storeFlight = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/flights', data)
            await router.push({ name: 'flight.index' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }

    }

    const updateFlight = async (id) => {
        errors.value = ''
        try {
            await axios.patch(`/api/flights/${id}`, flight.value)
            await router.push({ name: 'flight.index' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const destroyFligth = async (id) => {
        await axios.delete(`/api/fligths/${id}`)
    }

    return {
        errors,
        flight,
        flights,
        getFlights,
        storeFlight,
        showFlight,
        updateFlight,
        destroyFligth
    }
}
