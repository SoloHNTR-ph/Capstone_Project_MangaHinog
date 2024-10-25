<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Thread;
use App\Models\Listing;
use App\Models\User;

use function Pest\Laravel\get;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// UserProfile route
Route::get('/userprofile', function () {
    return view('userprofile');
})->name('userprofile')->middleware('auth');

// Register route
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Log in route 
Route::get('/login', function () {
    return view('login');  
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Thread route
Route::get('/threads', [ThreadController::class, 'index']);

Route::get('/threads/{thread}', [ThreadController::class, 'show']);





Route::get('/', function () {
    return view('welcome', [
        'threads' => thread::all()
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/listings', function() {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function($id) {
    return view(  'listing', [
        'listing' => Listing::find($id)
    ]);
});