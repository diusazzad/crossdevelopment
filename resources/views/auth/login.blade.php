@extends('layouts.auth')

@section('content')
    <div class="flex items-center justify-center h-screen bg-gray-100">
        <div class="flex flex-col items-center justify-center w-full bg-white rounded-lg shadow-md md:flex-row">
            <!-- Left Column: Content and Image -->
            <div class="w-full p-6 bg-gray-200 md:w-1/2">
                {{-- You can replace this image with your own --}}
                <x-home.logos />
                <img src="https://images.unsplash.com/photo-1432821596592-e2c18b78144f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                    alt="Image" class="w-full h-auto rounded-lg">
                <div class="mt-4 text-center">
                    <h2 class="text-2xl font-semibold text-gray-700">Technology at Your Fingertips</h2>
                    <p class="mt-2 text-gray-500">Hello, we're here to assist you.</p>
                </div>
            </div>
            <!-- Right Column: Email Credentials -->
            <div class="w-full p-6 bg-white rounded-lg md:w-1/2">
                <h1 class="mb-6 text-3xl font-semibold">Login</h1>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-700">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror"
                            required>
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-semibold text-gray-700">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror"
                            required>
                        @error('password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
