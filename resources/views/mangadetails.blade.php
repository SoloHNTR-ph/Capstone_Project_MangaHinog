<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @extends('navbar')
    @section('navbar')
    <div class="mt-2">
        <div class="flex-shrink-0 w-full h-96 flex items-center justify-center">
            <div class="relative w-full h-full flex items-center justify-center">
                <div class="absolute inset-0 bg-cover blur-sm bg-center" style="background-image: url('{{ asset('images/onepiece.jpg') }}');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black "></div>

                <div class="relative z-10 w-full">
                    <div>
                        <div>
                          <div class="flex w-full gap-9 px-10 ">
                            <div class="w-64 h-auto">
                              <img class="object-contain rounded-md" src="{{ asset('images/placeholder.png') }}" alt={title} />
                            </div>
                            <div class="flex flex-col w-full h-auto justify-between">
                              <div class="flex flex-col justify-between w-full">
                                <h1 class="text-6xl font-extrabold text-white">Title</h1>
                                <div class="flex justify-between">
                                  <div class="flex gap-5">
                                    <h3 class="text-white">Genre</h3>
                                    <h3 class="text-white">Author</h3>
                                  </div>
                                  <div class="flex">
                                    <h3 class="text-white">Status</h3>
                                  </div>    
                                </div>
                              </div>
                              <div>
                                <h3 class="text-white text-sm" >Summary:</h3>
                                <p class="text-white">Description</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                </div>
            </div>
            
        </div>
        <div class="flex justify-center items-center">

            <div class="m-8 w-full p-4 bg-white rounded-lg shadow-lg ">
                <h1 class="text-2xl font-bold mb-4">Chapters</h1>
                <div id="chapterList" class="max-h-96 overflow-y-auto flex flex-col gap-3">
                    <a href="/chapters" class="flex justify-between p-4 border rounded-lg bg-gray-100">
                        <div>Chapter 1</div>
                        <div>12/10/2024, 10:00 AM</div>
                    </a>
                    <a href="/chapters" class="flex justify-between p-4 border rounded-lg bg-gray-100">
                        <div>Chapter 2</div>
                        <div>13/10/2024, 11:30 AM</div>
                    </a>
                    <a href="/chapters" class="flex justify-between p-4 border rounded-lg bg-gray-100">
                        <div>Chapter 3</div>
                        <div>14/10/2024, 1:00 PM</div>
                    </a>
                    <a href="/chapters" class="flex justify-between p-4 border rounded-lg bg-gray-100">
                        <div>Chapter 1</div>
                        <div>12/10/2024, 10:00 AM</div>
                    </a>
                    <a href="/chapters" class="flex justify-between p-4 border rounded-lg bg-gray-100">
                        <div>Chapter 2</div>
                        <div>13/10/2024, 11:30 AM</div>
                    </a>
                    <a href="/chapters" class="flex justify-between p-4 border rounded-lg bg-gray-100">
                        <div>Chapter 3</div>
                        <div>14/10/2024, 1:00 PM</div>
                    </a>
                    <a href="/chapters" class="flex justify-between p-4 border rounded-lg bg-gray-100">
                        <div>Chapter 1</div>
                        <div>12/10/2024, 10:00 AM</div>
                    </a>
                    <a href="/chapters" class="flex justify-between p-4 border rounded-lg bg-gray-100">
                        <div>Chapter 2</div>
                        <div>13/10/2024, 11:30 AM</div>
                    </a>
                    <a href="/chapters" class="flex justify-between p-4 border rounded-lg bg-gray-100">
                        <div>Chapter 3</div>
                        <div>14/10/2024, 1:00 PM</div>
                    </a>
                    
                </div>
            </div>
        
        </div>
        <section class=" m-5">
            <div class=" mt-2 flex flex-col justify-center">
                <h3 class="text-2xl font-bold mb-4">Comments:</h3>
        
                <div class="container ">
                    <!-- Comment Form -->
                    <form action="" method="POST">
                        <input type="hidden" name="manga_id" value="">
                        <div class="mb-3">
                            <label for="comment" class="block text-lg font-medium mb-1">Add a Comment:</label>
                            <textarea name="comment" id="comment" class="w-full border rounded p-2" rows="3"></textarea>
                        </div>
                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 rounded">Submit Comment</button>
                    </form>
                </div>
        
                <!-- Display Comments -->
                <div class="mt-5">
                    <div class="mb-3 bg-white shadow rounded-lg">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{ asset('images/placeholder.png') }}" alt="Profile Picture" class="rounded-full mr-3" width="40" height="40">
                                <h5 class="text-lg font-semibold">Username</h5>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Posted Yesterday</p>
                            </div>
                        </div>
                        <div class=" ml-20">
                            <p class="text-gray-700 pb-5">Sample comment</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      @endsection
</body>
</html>