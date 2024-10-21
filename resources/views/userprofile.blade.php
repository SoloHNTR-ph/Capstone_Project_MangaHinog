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
        
            
        <div class="container mx-auto mt-4 flex space-x-8">

            <div class="w-1/4">
            </div>
        <div class="w-1/2">
            <div class="bg-white shadow p-4 rounded-lg">
                <div class="flex items-center space-x-4">
                    <img src="https://i.pinimg.com/originals/c0/8f/cf/c08fcffb8b50b3ed3237abb0102bf737.jpg" alt="Profile Picture" class="w-16 h-16 rounded-full">
                    <div>
                        <h1 class="text-xl font-semibold">Username</h1>
                        <p class="text-gray-500"></p>
              </div>
            </div>
        </div>
        <div class="bg-white mt-4 p-4 shadow-md rounded-lg">
            <nav class="flex space-x-6 text-sm">
                <a href="#" class="text-gray-500 hover:text-black border-b-2 border-blue-500 pb-1">Overview</a>
                <a href="#" class="text-gray-500 hover:text-black">Posts</a>
              <a href="#" class="text-gray-500 hover:text-black">Comments</a>
              <a href="#" class="text-gray-500 hover:text-black">Saved</a>
              <a href="#" class="text-gray-500 hover:text-black">Hidden</a>
              <a href="#" class="text-gray-500 hover:text-black">Upvoted</a>
              <a href="#" class="text-gray-500 hover:text-black">Downvoted</a>
            </nav>
        </div>
        
          <div class="flex flex-col items-center mt-8">
            <img src="https://i.pinimg.com/736x/40/17/ff/4017ff5023129ff95d38a2e11b2d9f6e.jpg" alt="Snoo" class="w-24 h-24 rounded-full">
            <p class="mt-4 text-lg text-gray-600">HAHAHEHEHIHIHOHOKAL</p>
        </div>
    </div>
    
    <div class="w-1/4">
        <div class="bg-white shadow p-4 rounded-lg">
            <h2 class="font-semibold">User Profile</h2>
            
            
            <div class="mt-4">
                <p>1 Post</p>
                <p>0 Comment </p>
            </div>
            
            <div class="mt-4">
                <p class="text-gray-500">Birthday</p>
                <p>Aug 9, 2024</p>
            </div>
            
            <div class="mt-4">
                <p class="text-gray-500">Email</p>
                <p>email@email.com</p>
            </div>
        </div>
    </div>
        
        
        
        @endsection
    </body>
</html>
