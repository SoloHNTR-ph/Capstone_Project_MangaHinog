@vite(['resources/css/app.css','resources/js/app.js'])
<x-navbar>
<section class="flex flex-col items-center justify-center pt-8 px-36">
    <a href="/threads/create" class="p-2 mb-5 bg-black text-white rounded-full">Create a Thread</a>
    @if (count($threads)==0)
    <p>No Available Thread</p>
    @endif
    @foreach ($threads as $thread)
    <x-cardThread :thread="$thread" />
    @endforeach
 </section>
 <div class="flex justify-center ">
    <div class="mt-6 p-4">
        {{$threads->links()}}
     </div>
 </div>
</x-navbar>
