@vite(['resources/css/app.css','resources/js/app.js'])
<x-navbar>
    <video autoplay muted loop class="bg-video">
        <source src="{{ asset('bg-video/bg-video.mp4') }}" type="video/mp4">
    </video>

    <div class="login-container login-flex mb-50 font-sans relative z-10">
        <div class="blur-bg p-6 sm:p-8 md:p-12 rounded-lg shadow-lg">
            <div class="login-page login-flex flex-col md:flex-row gap-10 items-center">
                <div class="flex flex-col justify-center items-center text-center">
                    <h1>
                        <img src="{{ asset('logo.svg') }}" alt="Icon" class="w-64 sm:w-80 md:w-96">
                    </h1>
                    <p class="text-lg font-semibold mt-2">Discover the latest and manga</p>
                    <p class="text-lg">Your gateway to endless stories.</p>
                </div>
                
                <form class="login-form w-full max-w-xs md:max-w-sm" action="/user/authenticate" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Email" required class="w-full p-3 mb-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <div class="link flex flex-col items-center">
                        <button type="submit" class="loginbtn w-full bg-black text-white p-2 rounded-lg mt-2">Login</button>
                        <a href="#" class="forgot text-blue-500 mt-2">Forgot password?</a>
                    </div>
                    <hr class="my-4 border-gray-300 w-full">
                    <div class="button text-center">
                        <a href="/register" class="text-blue-500 hover:underline">Create new account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-navbar>
