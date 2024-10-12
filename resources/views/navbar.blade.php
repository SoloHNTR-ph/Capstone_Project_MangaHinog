<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MangaHinog</title>
    
</head>
<body>
    <nav class="bg-gray-100 p-5 sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center col-span-4">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ asset('logo.svg') }}" alt="Manga Hinog Logo" class="h-10">
                </a>
            </div>
            <div class="flex items-center justify-center col-span-4">
                <ul class="flex items-center space-x-4">
                    <li>
                        <a href="{{ url('/') }}" class="flex items-center space-x-0">
                            <lottie-player 
                                src="https://lottie.host/f6b09ba4-d924-4500-94f8-8daedc7ad04e/OAcyVftV9M.json" 
                                background="transparent" 
                                speed="1" 
                                class="w-12 h-8 -mr-2" 
                                loop autoplay></lottie-player>
                            <span class="text-lg mt-3">Home</span>
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="#" class="flex items-center space-x-0">
                            <lottie-player 
                                src="https://lottie.host/8f35ffc9-2dcc-4517-a89f-fb914a8733dd/5DUeWSmb2i.json" 
                                background="transparent" 
                                speed="1" 
                                class="w-12 h-10 -mr-1" 
                                loop autoplay></lottie-player>
                            <span class="text-lg mt-3">Browse</span></a>
                        <ul class="absolute left-0 mt-2 bg-white border rounded shadow-md opacity-0 group-hover:opacity-100 group-hover:visible invisible transition-opacity duration-200 z-40">
                            <li><a href="{{ url('action') }}" class="block px-4 py-2 hover:bg-gray-200">Action</a></li>
                            <li><a href="{{ url('another-action') }}" class="block px-4 py-2 hover:bg-gray-200">Another action</a></li>
                            <li><hr class="border-t"></li>
                            <li><a href="{{ url('something-else') }}" class="block px-4 py-2 hover:bg-gray-200">Something else here</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <div class="flex items-center justify-end col-span-4">
                <form class="flex items-center space-x-2">
                    <input type="search" class="form-input px-4 py-2 border rounded" placeholder="Type your Manga" aria-label="Search">
                    <button class="bg-black text-white px-4 py-2 rounded">Search</button>
                    @if (session('username'))
                        <div class="relative">
                            <a href="#" id="userDropdown" class="flex items-center" data-bs-toggle="dropdown">
                                <lottie-player 
                                    src="https://lottie.host/25a30cb3-2c11-4ad3-95fa-8743f28b1403/fuMx2pN8sR.json" 
                                    background="transparent" 
                                    speed="1" 
                                    class="w-10 h-8" 
                                    loop autoplay></lottie-player>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mt-2 bg-white border rounded shadow-md">
                                <span class="ml-2">{{ session('username') }}</span>
                                <li><a href="{{ url('profile') }}" class="block px-4 py-2">Profile</a></li>
                                <li><hr class="border-t"></li>
                                <li><a href="{{ url('logout') }}" class="block px-4 py-2">Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <a href="/login" class="ml-3">
                            <lottie-player 
                                src="https://lottie.host/25a30cb3-2c11-4ad3-95fa-8743f28b1403/fuMx2pN8sR.json" 
                                background="transparent" 
                                speed="1" 
                                class="w-12 h-12" 
                                loop autoplay></lottie-player>
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </nav>
    
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    
    @yield('navbar')
    
    
    
</body>
</html>