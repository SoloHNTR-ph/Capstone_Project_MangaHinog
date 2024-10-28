<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // regitration
    public function create()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created successfuly');
    }

    // profile
    public function showProfile()
    {
        return view('users.profile');
    }

    // update

    public function editProfile()
    {
        return view('users.update');
    }


    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::find(Auth::id());

        if ($request->hasFile('profile_picture')) {
            if ($user->profile_picture) {
                Storage::delete($user->profile_picture);
            }

            $path = $request->file('profile_picture')->store('images', 'public');
            $user->profile_picture = $path;
        }

        $user->name = $request->input('name');
        $user->save();

        return redirect('/profile')->with('success', 'Profile updated successfully!');
    }

    public function logout(Request $request) 
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'You have been logged out!');
    }

    public function login()
    {
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/threads')->with('message', 'You are logged in!');
        }

        return back()->withErrors(['email' => 'Wrong password or email'])->onlyInput('email');
        
    }

    

}

