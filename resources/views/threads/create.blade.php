@vite(['resources/css/app.css','resources/js/app.js'])
<x-navbar>
<form method="POST" action="/threads" enctype="multipart/form-data"> <!-- Add enctype here -->
    @csrf
    <div class="flex flex-col mt-10 mx-20 border rounded-lg p-5 gap-4 mb-4 ">
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input 
             type="text"
             name="title" id="title" 
             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
             placeholder="Thread Title"
             value="{{old('title')}}">
             
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div>
        
        <div class="sm:col-span-2">
            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
            <textarea 
            name="content" 
            rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
            placeholder="Thread Content">{{old('content')}}</textarea>  
            @error('content')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror                  
        </div>
    </div>

    <!-- Image Upload Input -->
    <div>
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
        <input 
            type="file" 
            name="image" 
            id="image" 
            class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
        @error('image')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    
    <div class="flex justify-end">
        <button type="submit" class="text-White bg-black flex items-center justify-center font-bold rounded-full py-2 px-4 text-center">
            Post
        </button>
    </div>
</form>
</x-navbar>
