

<div class="flex justify-center items-center mb-48 mt-32 font-sans">
    <video autoplay muted loop class="bg-video">
        <source src="{{ asset('bg-video/bg-video.mp4') }}" type="video/mp4">
    </video>
    <div class="blur-bg">
      <div class="login-page login-flex flex flex-col items-center justify-center">
        <img src="{{ asset('logo.svg') }}" alt="Icon" width="550"/>
        <p class="text-2xl mt-4">Dive into the wild world of manga discussions and fan theories!</p>
        @auth
        <button class="mt-8 bg-white text-black px-6 py-3 rounded-lg font-bold"><a href="/threads">Get Started</a></button>
        @else
        <button class="mt-8 bg-white text-black px-6 py-3 rounded-lg font-bold"><a href="/login">Log In</a></button>
        @endauth
        
      </div>
    </div>
  </div>