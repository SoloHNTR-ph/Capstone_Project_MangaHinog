<?php


use App\Models\User;
use App\Models\Thread;
use App\Models\Listing;
use function Pest\Laravel\get;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ThreadController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('welcome', [
        'threads' => thread::all()
    ]);
});

// logout route 
Route::post('/logout', [UserController::class, 'logout']);
Route::delete('/profile/delete', [UserController::class, 'destroy']);


// login route 
Route::get('/login', [UserController::class, 'login']);
Route::post('/user/authenticate', [UserController::class, 'authenticate']);

Route::get('/profile', [UserController::class, 'showProfile']);

Route::get('/profile/edit', [UserController::class, 'editProfile']); 
Route::put('/profile/update', [UserController::class, 'updateProfile']);

// Register route
Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);

// Thread route
Route::get('/threads', [ThreadController::class, 'index']);
Route::get('threads/create', [ThreadController::class, 'create']);
Route::post('/threads', [ThreadController::class, 'store']);

// Edit and Update Routes
Route::put('/threads/{thread}', [ThreadController::class, 'update']);
Route::get('/threads/{thread}/edit', [ThreadController::class, 'edit']);

// Likes
Route::post('/threads/{thread}/like', [ThreadController::class, 'like']);
Route::get('/threads/{thread}', [ThreadController::class, 'show']);


// Comments route  
Route::post('/threads/{thread}/comments', [CommentController::class, 'store']);
Route::put('/comments/{comment}', [CommentController::class, 'update']);
Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);    
Route::post('/comments/{comment}/like', [CommentController::class, 'like']);

Route::delete('/threads/{thread}', [ThreadController::class, 'destroy']);

















