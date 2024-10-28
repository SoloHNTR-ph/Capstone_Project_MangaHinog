@vite(['resources/css/app.css','resources/js/app.js'])
<x-navbar>
    <div class="flex flex-col items-center justify-center">
        <h2 class="my-5 text-lg font-semibold">Update Your Profile</h2>
        <form class="" action="{{ url('/profile/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-col mt-10 mx-20 border rounded-lg p-5 gap-4 mb-4 justify-end">
                <div class="flex flex-col">
                    <div class="flex justify-center">
                        <img src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : asset('profile_placeholder.png') }}" alt="Profile Picture" class="w-32 h-32 rounded-full">
                    </div>
                    <div class="flex justify-center">
                        <label for="profile_picture" class="block">Profile Picture:</label>
                    </div>
                    <input type="file" name="profile_picture" id="profile_picture">
            
                </div>
                
                <div class="mb-4">
                    <div class="flex justify-center">
                        <label for="name" class="block">Username:</label>  
                    </div>
                    <input class="w-full text-center" type="text" name="name" id="name" value="{{ auth()->user()->name }}" required>
                </div>
            
                <div class="flex justify-center">
                    <button class="px-2 py-1 bg-black text-white rounded-full" type="submit">
                        Update
                    </button>
                </div>
            </div>
        
            
        </form>      
    </div>
</x-navbar>

