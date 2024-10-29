
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <title>Sign Up</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="flex flex-col items-center justify-center font-sans">
        <div class="mt-8">
            <img src="{{ asset('logo.svg') }}" alt="Icon" width="400" height="300" />
        </div>
        <h2 class="my-5 text-lg font-semibold">Create Your Account</h2>
        <form class="login-form" action="/users" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Username" value="{{ old('name') }}">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            <input type="password" name="password" placeholder="Password">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            <input type="password" name="password_confirmation" placeholder="Confirm Password">
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            <div class="link">
                <button type="submit" class="loginbtn">Create Account</button>
            </div>
        </form>      
    </div>
</body>
</html>
