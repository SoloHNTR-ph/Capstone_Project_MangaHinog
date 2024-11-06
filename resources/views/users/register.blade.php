@vite(['resources/css/app.css','resources/js/app.js'])

<x-navbar>
    <div class="flex flex-col items-center justify-center font-sans px-4 sm:px-6 md:px-8 py-8">
        <div class="mt-8">
            <img src="{{ asset('logo.svg') }}" alt="Icon" class="w-64 sm:w-80 md:w-96">
        </div>
        <h2 class="my-5 text-lg font-semibold text-center">Create Your Account</h2>
        
        <form class="login-form w-full max-w-xs sm:max-w-sm md:max-w-md" action="/users" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Username" value="{{ old('name') }}" class="w-full p-3 mb-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="w-full p-3 mb-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <input type="password" name="password" placeholder="Password" class="w-full p-3 mb-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full p-3 mb-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <div class="link mt-4">
                <button type="submit" class="loginbtn w-full bg-black text-white p-2 rounded-lg">Create Account</button>
            </div>
        </form>      
    </div>
</x-navbar>
