<!DOCTYPE html>
<html>

<head>
    <title>User Form</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @vite('resource/app.css')
</head>

<body class="grid content-center h-screen p-2 m-2 border place-content-center">
    <div class="">
        <h1 class="font-mono text-2xl text-center">User Information Form</h1>
        <form action="{{ route('store') }}" method="post" class="max-w-md p-6 mx-auto bg-white rounded-lg shadow-md">
            @csrf

            <!-- Basic User Information -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name ?? '') }}"
                    class="w-full p-2 mt-1 border rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email ?? '') }}"
                    class="w-full p-2 mt-1 border rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full p-2 mt-1 border rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Add more fields as needed -->

            <button type="submit"
                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Submit</button>
        </form>

    </div>


</body>

</html>
