<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MangaHinog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
    <script src="//unpkg.com/alpinejs" defer></script>
    <nav class="bg-gray-100 p-5 sticky top-0 z-40">
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
                        <a href="/threads" class="flex items-center space-x-0">
                            <lottie-player 
                                src="https://lottie.host/8f35ffc9-2dcc-4517-a89f-fb914a8733dd/5DUeWSmb2i.json" 
                                background="transparent" 
                                speed="1" 
                                class="w-12 h-10 -mr-1" 
                                loop autoplay></lottie-player>
                            <span class="text-lg mt-3">Browse</span></a>
                       
                    </li>
                    
                </ul>
            </div>
            <div class="flex items-center justify-end col-span-4">
                <form class="flex items-center space-x-2">
                    <input type="search" name="search" class="form-input px-4 py-2 border rounded" placeholder="Search a Topic" aria-label="Search">
                    <button class="bg-black text-white px-4 py-2 rounded">Search</button>
                </form>
                @auth
                    
                
                <div class="relative inline-block text-left">
                    <!-- Dropdown toggle button -->
                    <button id="userDropdownButton" type="button" class="flex items-center focus:outline-none">
                        <lottie-player 
                            src="https://lottie.host/25a30cb3-2c11-4ad3-95fa-8743f28b1403/fuMx2pN8sR.json" 
                            background="transparent" 
                            speed="1" 
                            class="w-10 h-8" 
                            loop autoplay>
                        </lottie-player>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="userDropdownMenu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="userDropdownButton">
                            <span class="block px-4 py-2 text-gray-700">{{auth()->user()->name}}</span>
                            <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">Profile</a>
                            <hr class="border-t">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" >
                                    Logout
                                </button>
                            </form>
                            
                        </div>
                    </div>
                </div>
                @else
                    <a href="/login" class="ml-3">
                        <lottie-player 
                            src="https://lottie.host/25a30cb3-2c11-4ad3-95fa-8743f28b1403/fuMx2pN8sR.json" 
                            background="transparent" 
                            speed="1" 
                            class="w-12 h-12" 
                            loop autoplay></lottie-player>
                            <p>log in</p>
                    </a>
                @endauth
            </div>
        </div>
    </nav>
    <main>
        {{$slot}}
    </main>

    
    </footer> <footer class="bg-gray-900 text-white py-10 px-5">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
          <div>
            <div class="flex items-center space-x-3 mb-4">
              <img src="logo.svg" alt="Manga Universe Logo" class="h-20 w-95 rounded-full bg-gray-800 p-2">
              
            </div>
            <p class="text-gray-400">Dive into a world of manga and discover your next favorite series!</p>
            <div class="mt-4 flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-blue-500"><i class="fab fa-facebook fa-lg"></i></a>
              <a href="#" class="text-gray-400 hover:text-blue-400"><i class="fab fa-twitter fa-lg"></i></a>
              <a href="#" class="text-gray-400 hover:text-pink-500"><i class="fab fa-instagram fa-lg"></i></a>
              <a href="#" class="text-gray-400 hover:text-red-600"><i class="fab fa-youtube fa-lg"></i></a>
            </div>
          </div>
      
          <div>
            <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
            <ul class="space-y-2">
              <li><a href="#" class="hover:text-gray-300">Home</a></li>
              <li><a href="#" class="hover:text-gray-300">Browse</a></li>
              <li><a href="#" class="hover:text-gray-300">Contact</a></li>
            </ul>
          </div>
      
          <div>
            <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
            <ul class="space-y-2 text-gray-400">
              <li><i class="fas fa-envelope"></i> <a href="mailto:info@mangauniverse.com" class="hover:text-gray-300">info@mangahinog.com</a></li>
              <li><i class="fas fa-phone"></i> <a href="tel:+123456789" class="hover:text-gray-300">+1 (234) 567-89</a></li>
              <li><i class="fas fa-map-marker-alt"></i> 123 Manga St, Comic City</li>
            </ul>
          </div>
        </div>
      
        <div class="border-t border-gray-700 mt-10 pt-4 text-center text-sm text-gray-500">
          &copy; 2024 MangaHinog. All rights reserved.
        </div>
      </footer>
    
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    
    
    <x-successMessage />
    
    
</body>
</html>