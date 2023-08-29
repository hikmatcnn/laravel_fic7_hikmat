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
    // return view('welcome');
    return view('auth.login', ['type_menu' => '']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard', ['type_menu' => '']);
    })->name('home')->middleware('can:dashboard');
    Route::get('profile', function () {
        return view('pages.profile', ['type_menu' => '']);
    })->name('Profile');
    Route::resource('user', UserController::class);
});
