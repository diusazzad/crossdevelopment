<template>
    <div class="flex items-center justify-center h-screen p-2 m-2 bg-black">
        <div class="w-full max-w-md p-6 text-white border rounded-lg">
            <h1 class="mb-4 text-3xl font-bold">Sign In</h1>
            <form @submit.prevent="loginUser">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input v-model="formData.email" type="email" id="email" name="email"
                        class="w-full p-2 mt-1 border rounded-md focus:ring-blue-500 focus:border-blue-500" />
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input v-model="formData.password" type="password" id="password" name="password"
                        class="w-full p-2 mt-1 border rounded-md focus:ring-blue-500 focus:border-blue-500" />
                </div>

                <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                    Sign In
                </button>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const formData = ref({
    email: '',
    password: '',
});

const router = useRouter();

const loginUser = async () => {
    // Simulate API call or any async login process
    // Replace this with your actual login logic
    console.log('Logging in user:', formData.value);

    // Assuming successful login, navigate to another page
    await router.push('/dashboard'); // Change '/dashboard' to your desired destination
};
</script>

<style scoped></style>
