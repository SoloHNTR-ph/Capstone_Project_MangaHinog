@vite(['resources/css/app.css','resources/js/app.js'])
<x-navbar>
    <section class="flex flex-col items-center justify-center pt-8 px-4 sm:px-6 md:px-36 font-sans gap-4">
        @auth 
        <a href="/threads/create" class="p-2 mb-5 bg-black text-white rounded-full hover:bg-red-800">Create a Thread</a>
        @else 
        <a href="/login" class="p-2 mb-5 bg-black text-white rounded-full hover:bg-red-800">Log in to create a Thread</a>
        @endauth
        @if (count($threads) == 0)
        <p>No Available Thread</p>
        @endif
        @foreach ($threads as $thread)
        <x-cardThread :thread="$thread" />
        @endforeach
    </section>
    <div class="flex justify-center">
        <div class="mt-6 p-4">
            {{$threads->links()}}
        </div>
    </div>
</x-navbar>
