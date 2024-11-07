<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MangaHinog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <script src="//unpkg.com/alpinejs" defer></script>

    <nav class="bg-gray-100 dark:bg-gray-100 p-5 sticky top-0 z-40 sm:z-40">
        <div class="container mx-auto flex items-center justify-between flex-wrap">
            <div class="flex items-center w-full md:w-auto mb-2 md:mb-0 justify-between">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ asset('logo.svg') }}" alt="Manga Hinog Logo" class="h-10">
                </a>
                <div class="block md:hidden ml-auto">
                    <button id="menuToggle" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="menuItems" class="hidden md:flex md:flex-row flex-col md:items-center md:space-x-4 w-full md:w-auto">
                <ul class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4">
                    <li>
                        <a href="{{ url('/') }}" class="flex items-center space-x-0">
                            <span class="text-lg mt-3">Home</span>
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="/threads" class="flex items-center space-x-0">
                            <span class="text-lg mt-3">Browse</span>
                        </a>
                    </li>
                </ul>
                <div class="flex items-center justify-end mt-3 md:mt-0">
                    {{-- <button id="darkModeToggle" class="p-2 rounded focus:outline-none flex items-center">
                        <img id="darkModeIcon" src="{{ asset('dark-theme-svgrepo-com.svg') }}" alt="Dark Mode Icon" class="w-6 h-6 md:w-8 md:h-8">
                    </button> --}}
                </div>
                
                <div class="flex items-center justify-end mt-3 md:mt-0">
                    <form class="flex items-center space-x-2 w-full md:w-auto">
                        <input type="search" name="search" class="form-input px-4 py-2 border rounded w-full md:w-auto" placeholder="Search a Topic" aria-label="Search">
                        <button class="bg-black text-white hover:bg-red-800 px-4 py-2 rounded">Search</button>
                    </form>
                    @auth
                        <div class="relative inline-block text-left ml-3">
                            <button id="userDropdownButton" type="button" class="flex items-center focus:outline-none">
                                <lottie-player 
                                    src="https://lottie.host/25a30cb3-2c11-4ad3-95fa-8743f28b1403/fuMx2pN8sR.json" 
                                    background="transparent" 
                                    speed="1" 
                                    class="w-10 h-8" 
                                    loop autoplay>
                                </lottie-player>
                            </button>
                            <div id="userDropdownMenu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="userDropdownButton">
                                    <span class="block px-4 py-2 text-gray-700">{{auth()->user()->name}}</span>
                                    <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">Profile</a>
                                    <hr class="border-t">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="/login" class="ml-3">
                            <p class="text-sm mt-1">Log in</p>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    
    <script>
        document.getElementById('menuToggle').addEventListener('click', function () {
            document.getElementById('menuItems').classList.toggle('hidden');
        });
    </script>
    
    <main class="">
        {{$slot}}
    </main>

    <footer class="bg-gray-900 text-white py-10 px-5">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
                <div class="flex justify-center items-center">
                    <img src="{{asset('logo.svg') }}" alt="Manga Universe Logo" class="h-24 w-95 rounded-full bg-gray-800 p-2">
                </div>
                <p class="text-gray-400 text-center mx-auto">
                    Dive into a world of manga and discover your next favorite series! Stay updated with the latest releases and enjoy reading manga with our curated collection.
                </p>
                <div class="mt-4 flex justify-center space-x-4">
                    <a href="#" class="text-gray-400 hover:text-blue-500"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-gray-400 hover:text-blue-400"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-gray-400 hover:text-pink-500"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-gray-400 hover:text-red-600"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
        
            <div class="mb-6 text-center">
                <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="/" class="hover:text-gray-300 block">Home</a></li>
                    <li><a href="/threads" class="hover:text-gray-300 block">Browse</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-xl font-semibold mb-4 text-center md:text-left">Contact Us</h3>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex justify-center md:justify-start items-center space-x-2">
                        <i class="fas fa-envelope"></i>
                        <a href="#" class="hover:text-gray-300">info@mangahinog.com</a>
                    </li>
                    <li class="flex justify-center md:justify-start items-center space-x-2">
                        <i class="fas fa-phone"></i>
                        <a href="#" class="hover:text-gray-300">+1 (234) 567-89</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-5 pt-5 text-center text-sm text-gray-500">
            &copy; 2024 MangaHinog. All rights reserved.
        </div>
    </footer>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    {{-- <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const darkModeIcon = document.getElementById('darkModeIcon');
        darkModeToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
                darkModeIcon.src = "{{ asset('light-theme-svgrepo-com.svg') }}";
            } else {
                localStorage.removeItem('theme');
                darkModeIcon.src = "{{ asset('dark-theme-svgrepo-com.svg') }}";
            }
        });
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
            darkModeIcon.src = "{{ asset('light-theme-svgrepo-com.svg') }}"; 
        }
    </script> --}}

    <x-successMessage />
</body>
</html>
