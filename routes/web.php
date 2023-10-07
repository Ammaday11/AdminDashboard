<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blank', function () {
    return view('admin.blank');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/sign-up', function () {
    return view('admin.sign-up');
});

// Route::get('/new-order', function () {
//     return view('admin.new-order');
// });

// Route::get('/edit-order', function () {
//     return view('admin.edit-order');
// });

//Route::resource('orders', App\Http\Controllers\OrdersController::class);

Route::get('/create-order', [App\Http\Controllers\OrdersController::class, 'create'])->name('create-order');
Route::get('/', [App\Http\Controllers\OrdersController::class, 'index'])->name('home');