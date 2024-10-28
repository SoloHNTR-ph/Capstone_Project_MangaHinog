@vite(['resources/css/app.css','resources/js/app.js'])
<x-navbar>
    <body>
        
            
        <div class="container mx-auto mt-4 flex space-x-8">

            <div class="w-1/4">
            </div>
        <div class="w-1/2">
            <div class="bg-white shadow p-4 rounded-lg">
                <div class="flex justify-between space-x-4">
                    <div class="flex items-center gap-3">
                        @if (auth()->user()->profile_picture)
                        <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Profile Picture" class="w-16 h-16 rounded-full">
                        @else
                        <img src="{{ asset('profile_placeholder.png') }}" alt="Profile Picture" class="w-16 h-16 rounded-full">
                        @endif
                    <div>
                        <h1 class="text-xl font-semibold">{{auth()->user()->name}}</h1>
                        <button>Edit</button>
                    </div>
                    </div>
                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg  dark:text-white dark:bg-gray-800" type="button">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>
                        </button>
                        
                        <!-- Dropdown menu -->
                        <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700 dark:divide-gray-600">
                            <ul class=" text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                              <li>
                                <a href="/profile/edit" class="block px-2 py-2 text-black">Edit Profile</a>
                              </li>
                              
                              
                            </ul>
                            
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
                <p class="text-gray-500">Email</p>
                <div class="flex gap-5">
                    <p>{{ auth()->user()->email }}</p>

                </div>
            </div>
        </div>
    </div>

</x-navbar>