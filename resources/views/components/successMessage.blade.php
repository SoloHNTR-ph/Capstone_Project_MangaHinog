@if (session()->has('message'))
    <div  x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-0 w-full py-4 bg-green-500 opacity-75 z-50 flex justify-center">
        <p>{{session('message')}}</p>
    </div>
@endif