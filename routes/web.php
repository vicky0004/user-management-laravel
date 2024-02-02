<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('index');
});

// Route::get('/register', function () {
//     return view('registration');
// });

Route::get('/login', function () {
    return view('login');
});
// Route::get('/profile', function () {
//     return view('profile');
// });

Route::get('/register',[UserController::class, 'create']);
Route::post('/register',[UserController::class, 'store']);
Route::post('/login',[UserController::class, 'login']);
Route::get('/register/edit/{id}',[UserController::class, 'edit']);
Route::post('/register/edit/{id}',[UserController::class, 'update']);

