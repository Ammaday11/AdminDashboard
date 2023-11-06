<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    OrdersController,
    Auth\RegisterController,
};
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

// Route::get('/', function () {
//     return view('home');
// });

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/blank', function () {
//     return view('admin.blank');
// });

// Route::get('/login', function () {
//     return view('User.login');
// });

// Route::get('/sign-up', function () {
//     return view('User.sign-up');
// });

// Route::get('/new-order', function () {
//     return view('admin.new-order');
// });

// Route::get('/edit-order', function () {
//     return view('admin.edit-order');
// });

//Route::resource('orders', App\Http\Controllers\OrdersController::class);

Route::get('/', [App\Http\Controllers\OrdersController::class, 'index'])->name('home');

Route::get('/create-order', [App\Http\Controllers\OrdersController::class, 'create'])->name('create-order');
Route::get('/edit-order/{id}', [App\Http\Controllers\OrdersController::class, 'edit'])->name('edit-order');
Route::get('/show-order/{id}', [App\Http\Controllers\OrdersController::class, 'show'])->name('show-order');

Route::get('/sign-up', [App\Http\Controllers\Auth\RegisterController::class, 'sign_up'])->name('sign-up');
Route::post('/create-user', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('create-user');