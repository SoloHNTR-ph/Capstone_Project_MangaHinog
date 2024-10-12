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
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Title</h1>
      
        <div class="flex items-center gap-4 mb-4">
          <div class="flex-1">
            <select
              class="block rounded-full border-gray-300 py-2 px-4 text-gray-900 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-gray-600"
              id="chapterSelect"
              onchange="changeChapter(this.value)"
            >
              <option value="">
                Chapter 
              </option>
              
            </select>
          </div>
          
      
          <div class="flex gap-4">
            <button
              id="prevPage"
              class="text-sm py-1 border-gray-400 rounded-full bg-black text-white shadow-sm hover:bg-gray-800 disabled:opacity-50 w-32"
              disabled
            >
              Prev Chapter
            </button>
            <button
              id="nextPage"
              class="text-sm py-1 border-gray-400 rounded-full bg-black text-white shadow-sm hover:bg-gray-800 w-32"
            >
              Next Chapter
            </button>
            
          </div>
        </div>
      
        <div class="flex justify-center items-center relative h-[70vh] bg-no-repeat bg-center" id="imageContainer">
          <p>No pages available</p>
        </div>
      </div>
      <section class=" m-5">
        <div class=" mt-2 flex flex-col justify-center">
            <h3 class="text-2xl font-bold mb-4">Comments:</h3>
    
            <div class="container ">
                <form action="" method="POST">
                    <input type="hidden" name="manga_id" value="">
                    <div class="mb-3">
                        <label for="comment" class="block text-lg font-medium mb-1">Add a Comment:</label>
                        <textarea name="comment" id="comment" class="w-full border rounded p-2" rows="3"></textarea>
                    </div>
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 rounded">Submit Comment</button>
                </form>
            </div>
            
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