<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga Log In</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body>
    <video autoplay muted loop class="bg-video">
        <source src="{{ asset('bg-video/bg-video.mp4') }}" type="video/mp4">
    </video>

    <div class="login-container login-flex">
      <div class="blur-bg">
        <div class="login-page login-flex gap-10">
          <div class="flex flex-col justify-center items-center">
              <h1>
                  <img src="{{ asset('logo.svg') }}" alt="Icon" width="400" height="300" />
              </h1>
              <p>Discover the latest and manga</p>
              <p>Your gateway to endless stories.</p>
          </div>
        
          <!-- Updated login form -->
          <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf <!-- CSRF token for security -->
            
            <!-- Email input -->
            <input type="email" name="email" placeholder="Email or phone number" value="{{ old('email') }}" required>
            @error('email')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <!-- Password input -->
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            
            <!-- Login button -->
            <div class="link">
              <button type="submit" class="loginbtn">Login</button>
              <a href="{{ route('password.request') }}" class="forgot">Forgot password?</a>
            </div>
            
            <hr>
            
            <!-- Link to the registration page -->
            <div class="button">
              <a href="{{ route('register') }}">Create new account</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
