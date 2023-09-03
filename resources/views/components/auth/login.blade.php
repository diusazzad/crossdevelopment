<div class="p-6 mx-auto bg-white rounded shadow w-96">
    <h2 class="mb-6 text-2xl font-semibold">Login</h2>

    @if(session('status'))
    <div class="p-2 mb-4 text-white bg-red-500 rounded">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('auth.login') }}">
        @csrf

        <x-form.input label="Email/Username" type="text" name="email" :value="old('email') ?? ''"
            :error="$errors->first('email')" />

        <x-form.input label="Password" type="password" name="password" :value="old('password') ?? ''"
            :error="$errors->first('password')" />

        <div class="mb-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                <span class="ml-2">Remember Me</span>
            </label>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

    <div class="mt-4">
        <a href="#" class="text-blue-500 hover:underline">Forgot Password?</a>
    </div>
</div>
