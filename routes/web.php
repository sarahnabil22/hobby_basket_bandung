<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//TODO: Sarah ini file untuk routing, 
Route::get('/', function () {
    return view('home');
});

Route::get('/shopping-cart', function () {
    return view('shopping-cart'); // ini nama file.blade.php bisa cari di resources/views/...
})->name('cart');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
