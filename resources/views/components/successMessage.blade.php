@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-0 inset-x-0 w-full max-w-md mx-auto py-4 px-6 bg-gray-900 text-white opacity-75 z-50 flex justify-center items-center rounded-lg shadow-lg">
        <p class="text-center">{{ session('message') }}</p>
    </div>
@endif
