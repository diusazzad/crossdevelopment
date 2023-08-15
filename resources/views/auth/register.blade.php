@extends('layouts.auth')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-md p-8 bg-white rounded shadow-md md:flex md:flex-row">
            <!-- Left Column: Registration Form -->
            <div class="w-full p-6 md:w-1/2">
                <h1 class="mb-6 text-2xl font-semibold md:text-3xl">Register</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-sm font-semibold text-gray-700">Name:</label>
                        <input type="text" name="name" id="name"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-700">Email:</label>
                        <input type="email" name="email" id="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-2 text-sm font-semibold text-gray-700">Password:</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="block mb-2 text-sm font-semibold text-gray-700">Confirm
                            Password:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Register</button>
                    </div>
                </form>
            </div>
            <!-- Right Column: Image -->
            <div class="hidden md:flex md:flex-col md:justify-center md:w-1/2">
                <img src="https://plus.unsplash.com/premium_photo-1664391649733-b92a94066d7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                    alt="Image" class="w-full h-auto rounded-lg">
                <div class="mt-4 text-center">
                    <h2 class="text-lg font-semibold text-gray-700">Technology at Your Fingertips</h2>
                    <p class="mt-2 text-gray-500">Hello, we're here to assist you.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
