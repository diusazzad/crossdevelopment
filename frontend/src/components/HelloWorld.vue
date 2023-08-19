<script setup>
import { onMounted } from 'vue';

// defineProps({
//   msg: {
//     type: String,
//     required: true
//   }
// })
import useStudent from "../composables/StudentApi"

const { studentData, error, getAllStudent } = useStudent();
onMounted(getAllStudent)
</script>

<template>
    <div class="greetings">
        <h1 class="text-2xl font-bold mb-4">Connect Vue js with Laravel</h1>
        <div v-if="error" class="text-red-500">Oops! {{ error.message }}</div>
        <div v-else-if="studentData">
            <table class="table-auto">
                <thead>
                    <tr> 
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="({ id, stuname, email }, i) in studentData" :key="id">
                        <td class="border px-4 py-2">{{ ++i }}</td>
                        <td class="border px-4 py-2">{{ stuname }}</td>
                        <td class="border px-4 py-2">{{ email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<style scoped></style>
