<div class="flex justify-center items-center mb-48 mt-32 font-sans pb-64 sm:pb-64">
  <video autoplay muted loop class="absolute inset-0 w-full sm:h-3/4 md:h-full h-full object-cover">
      <source src="{{ asset('bg-video/bg-video.mp4') }}" type="video/mp4">
  </video>

  <div class="blur-bg">
      <div class="login-page login-flex flex flex-col items-center justify-center">
          <img src="{{ asset('logo.svg') }}" alt="Icon" class="w-48 sm:w-64 md:w-80 lg:w-[550px]"/>
          <p class="text-lg sm:text-xl md:text-2xl mt-4 text-center">
              <span class="block sm:hidden">Dive into the wild</span>
              <span class="block sm:hidden">world of manga discussions</span>
              <span class="block sm:hidden">and fan theories!</span>
              <span class="hidden sm:inline">Dive into the wild world of manga discussions and fan theories!</span>
          </p>
          @auth
          <button class="mt-8 bg-white text-black px-6 py-3 rounded-lg font-bold"><a href="/threads">Get Started</a></button>
          @else
          <button class="mt-8 bg-white text-black px-6 py-3 rounded-lg font-bold"><a href="/login">Log In</a></button>
          @endauth
      </div>
  </div>
</div>
