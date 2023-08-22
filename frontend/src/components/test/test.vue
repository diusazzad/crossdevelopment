<template>
    <div class="flex items-center justify-center h-screen p-2 m-2 bg-black">
        <div class="w-full max-w-md p-6 text-white border rounded-lg">
            <h1 class="mb-4 text-3xl font-bold">
                Happening<br />
                now
            </h1>
            <span class="mb-4 font-bold text-blue-500">Join today</span>
            <div class="px-4 py-2 mb-4 font-semibold text-white bg-blue-700 rounded-full hover:bg-blue-800">
                <a href=""> Sign up with Google</a>
            </div>
            <div class="flex items-center mb-4">
                <div class="flex-grow border-t"></div>
                <span class="mx-4 text-gray-400">or</span>
                <div class="flex-grow border-t"></div>
            </div>
            <RouterLink to="/signup" class="mb-4 text-blue-500">
                Create account
            </RouterLink>
            <div class="mb-4 text-sm text-gray-400">
                By signing up, you agree to the <br />
                Terms of Service and Privacy Policy, including Cookie Use
            </div>
            <span class="text-gray-400">Already have an account?</span>
            <RouterLink to="/signin">
                <button class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-full hover:bg-blue-600">
                    Sign in
                </button>
            </RouterLink>
        </div>
        <!-- Modal -->
        <div :class="[
            'fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70',
            { hidden: !modalVisible },
        ]">
            <div class="relative p-6 bg-white rounded-lg">
                <button @click="closeModal" class="absolute text-gray-500 top-2 right-2 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.5 3.5a.5.5 0 0 1 .708-.708L8 7.293l3.792-3.791a.5.5 0 1 1 .708.708L8.707 8l3.791 3.792a.5.5 0 0 1-.708.708L8 8.707l-3.792 3.791a.5.5 0 0 1-.708-.708L7.293 8 3.5 4.208a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
                <button class="px-4 py-2 mb-4 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600">
                    Sign in with Google
                </button>
                <div class="flex items-center mb-4">
                    <div class="flex-grow border-t"></div>
                    <span class="mx-4 text-gray-400">or</span>
                    <div class="flex-grow border-t"></div>
                </div>
                <div>
                    <input type="text" name="" placeholder="Phone, email, or username"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md" />
                </div>
                <div class=""><input type="text" class="" />Forget password?</div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { RouterLink } from 'vue-router';

// const modalVisible = ref(false);

// const openModal = () => {
//     modalVisible.value = true;
// };

// const closeModal = () => {
//     modalVisible.value = false;
// };
</script>

<style lang="scss" scoped></style>
