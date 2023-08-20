@if ($user)
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Bio:</strong> {{ $user->bio }}</p>
    <p><strong>Location:</strong> {{ $user->location }}</p>
    <p><strong>Device Model:</strong> {{ $user->device_model }}</p>
    <p><strong>About:</strong> {{ $user->about }}</p>
    {{-- Display other fields as needed --}}
@else
    <p>User not found.</p>
@endif
