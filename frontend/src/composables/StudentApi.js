import { ref } from 'vue'
import axios from 'axios'

export default function useStudent() {
    const url = "http://localhost:8000/api/student"
    const studentData = ref([])
    const error = ref(null)
    // Get All Studens Data
    const getAllStudent = async () => {
        studentData.value = []
        error.value = null
        try {
            const res = await axios.get(url)
            studentData.value = res.data
        } catch (err) {
            error.value = err
        }
    }
    return {
        studentData,
        error,
        getAllStudent
    }
}
