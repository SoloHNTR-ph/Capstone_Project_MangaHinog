
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
    <div class="flex flex-col items-center justify-center">
        <div class="mt-8">
            <img src="{{ asset('logo.svg') }}" alt="Icon" width="400" height="300" />
        </div>
        <h2 class="my-5 text-lg font-semibold">Create Your Account</h2>
        <form class="login-form" action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password_confirmation" placeholder="Confirm Password">
            <div class="link">
                <button type="submit" class="loginbtn">Create Account</button>
            </div>
        </form>      
    </div>
</body>
</html>
