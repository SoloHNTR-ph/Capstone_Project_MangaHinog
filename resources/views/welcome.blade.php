<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MangaHinog</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    @extends('navbar')
    @section('navbar')
    <body>
        <header>
            <div class="flex justify-center items-center mb-48 mt-32">
                <video autoplay muted loop class="bg-video">
                    <source src="{{ asset('bg-video/bg-video.mp4') }}" type="video/mp4">
                </video>
                <div class="blur-bg">
                  <div class="login-page login-flex flex flex-col items-center justify-center">
                    <img src="{{ asset('logo.svg') }}" alt="Icon" width="550"/>
                    <p class="text-2xl mt-4">Dive into the wild world of manga discussions and fan theories!</p>
                    <button class="mt-8 bg-white text-black px-6 py-3 rounded-lg font-bold">Get Started</button>
                  </div>
                </div>
              </div>
        </header>
            
            <main class="pt-10 px-4 bg-white">
                
                <div class="text-center">
                    <h1 class="text-5xl font-bold text-gray-800 mb-4">Our Community Forum!</h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">This is a no-code community forum! If you're new to no-code, you've come to the right place. This forum is the perfect spot to find like-minded individuals who are passionate about no-code and ready to help you take your skills to the next level.</p>
                </div>
        
                <div class="flex justify-center">
                    <form class="flex space-x-4">
                        <input type="email" placeholder="Your Email" class="border border-gray-300 px-4 py-2 rounded-lg w-64 focus:outline-none focus:border-blue-500">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg">Join Now</button>
                    </form>
                </div>
            </main>
        
              
                <main class="text-center py-20 px-6 bg-white">
                    <h1 class="text-5xl font-bold text-gray-800 mb-4">Join the Talk.</h1>
                    <p class="text-gray-600 mb-10 max-w-lg mx-auto">Explore the forum below and find answers to all of your questions. Engage with others and share your insights in a friendly community.</p>
                
                    <a href="#"
                       class="bg-gray-800 text-white py-2 px-6 rounded-md inline-flex items-center justify-center space-x-2 shadow hover:bg-gray-900 transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                        <span>Create New Post</span>
                    </a>
                </main>
        
            <section class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/71735498-73e0-4995-8ee0-5b26b2bc5ce0/dhifbyb-36f1e79d-9b4b-4753-bf73-9ba9fdfcca82.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzcxNzM1NDk4LTczZTAtNDk5NS04ZWUwLTViMjZiMmJjNWNlMFwvZGhpZmJ5Yi0zNmYxZTc5ZC05YjRiLTQ3NTMtYmY3My05YmE5ZmRmY2NhODIuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.pJFVee4mwGu43XGzprRTyvnXfqljxNVf7ve74J2NAhM" alt="Pregnancy Image" class="w-full h-64 object-cover"> 
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">Kaiju No.8</h2>
                        <p class="text-gray-600">Describe your forum category. Engage your audience and entice them to continue reading.</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-gray-500">1 view | 3 comments</span>
                            <button class="text-blue-500 hover:underline">Follow</button>
                        </div>
                    </div>
                </div>
            
         
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.pixelstalk.net/wp-content/uploads/images6/Minimal-Manga-Wallpaper-HD.jpg" alt="Babies Image" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">Chainsaw Man</h2>
                        <p class="text-gray-600">Add your category description here. Be sure to write in an informative way that entices further reading.</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-gray-500">1 view | 3 comments</span>
                            <button class="text-blue-500 hover:underline">Follow</button>
                        </div>
                    </div>
                </div>
          
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://i.pinimg.com/736x/fd/ef/a4/fdefa49d6fccb9d123456aafc32c6da8.jpg" alt="Sleeping Image" class="w-full h-64 object-cover"> 
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">MHA</h2> 
                        <p class="text-gray-600">Add your category description here. Be sure to write in an informative way that entices further reading.</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-gray-500">1 view | 3 comments</span>
                            <button class="text-blue-500 hover:underline">Follow</button>
                        </div>
                    </div>
                </div>
            
           
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images8.alphacoders.com/128/1283835.png" alt="Kids Image" class="w-full h-64 object-cover"> 
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">Dandadan</h2>
                        <p class="text-gray-600">Add your category description here. Be sure to write in an informative way that entices further reading.</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-gray-500">0 views | 3 comments</span>
                            <button class="text-blue-500 hover:underline">Follow</button>
                        </div>
                    </div>
                </div>
            </section>
        
        
        
        @endsection
    </body>
</html>
