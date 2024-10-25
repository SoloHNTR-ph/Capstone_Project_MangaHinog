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
        @include('partials._hero')
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
        
                <section class="flex flex-col items-center justify-center pt-8 px-36 bg-white">
                    @if (count($threads)==0)
                    <p>No Available Thread</p>
                    @endif
                    @foreach ($threads as $thread)
                    <a href="/threads/{{$thread['id']}}"
                        class="block p-6 border border-gray-200 rounded-lg shadow dark:border-gray-700 w-full"
                    >
                        <div class="flex gap-3 items-center">
                            <div>
                                <img
                                    class="rounded-full"
                                    src="{{ asset('images/profile_placeholder.png') }}" 
                                    alt="Profile Picture"
                                    height="40"
                                    width="40"
                                />
                            </div>
                            <h1 class="font-bold">Username</h1> 
                        </div>
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">
                            {{$thread['title']}}
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            {{$thread['content']}}
                        </p>
                        <div class="flex gap-4 mt-3">
                            <button>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 0, 1); transform: msfilter"
                                >
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"
                                    ></path>
                                </svg>
                                
                            </button>
                            <button>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 0, 1); transform: msfilter"
                                >
                                    <path
                                        d="M20 2H4c-1.103 0-2 .897-2 2v18l5.333-4H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14H6.667L4 18V4h16v12z"
                                    ></path>
                                </svg>
                                
                            </button>
                        </div>
                    </a>
                    @endforeach
                </section>
        
        
        
        @endsection
    </body>
</html>
