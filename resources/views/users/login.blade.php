
@vite(['resources/css/app.css','resources/js/app.js'])
<x-navbar>
    <video autoplay muted loop class="bg-video">
        <source src="{{ asset('bg-video/bg-video.mp4') }}" type="video/mp4">
    </video>

    <div class="login-container login-flex mb-96 font-sans">
      <div class="blur-bg">
        <div class="login-page login-flex gap-10">
          <div class="flex flex-col justify-center items-center">
              <h1>
                  <img src="{{ asset('logo.svg') }}" alt="Icon" width="400" height="300" />
              </h1>
              <p>Discover the latest and manga</p>
              <p>Your gateway to endless stories.</p>
          </div>
        
          <form class="login-form" action="/user/authenticate" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
            <div class="link">
                <button type="submit" class="loginbtn">Login</button>
                <a href="#" class="forgot">Forgot password?</a>
            </div>
            <hr>
            <div class="button">
                <a href="/register">Create new account</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </x-navbar>
