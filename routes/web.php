<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\loginController;
// use App\Http\Controllers\RestaurantsControllers;
use App\Http\Controllers\categoryController; 
use App\Http\Controllers\ordersController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\AdmininventoryController;




// use App\Http\Controllers\pembayaranController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/layouts.main', function () {
    return view('layouts.main');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', function () {
    return view('menu',[
        'active'=> 'menu'
    ]);
});
Route::get('/home', function () {
    return view('home',[
        'active'=> 'home'
    ]);
});

Route::get('/specials', function () {
    return view('specials', [
        'active'=> 'specials'
    ]);
});

Route::get('/order_meal', function () {
    return view('order_meal.index', [
        'active'=> 'meal'
    ]);
});

Route::get('/order_table', function () {
    return view('order_table.index', [
        'active'=> 'table'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'active'=> 'contact'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'active'=> 'dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/layouts', function () {
    return view('dashboard.layouts.sidebar', [
        'active'=> 'contact'
    ]);
});

Route::get('orders', function () {
    return view('dashboard.orders.index', [
        'active'=> 'contact'
    ]);
});

// Route::get('/order_meal.index', function () {
//     return view('order_meal.index', [
//     ]);
// });

Route::get('/order_table.index', function () {
    return view('order_table.index', [
    ]);
});


Route::get('/tambahpembayaran',[categoryController::class, 'index'])->name('tambahpembayaran');
Route::resource('/dashboard/category',categoryController::class)->except('show');
// Route::post('/insertpembayaran',[pembayaranController::class, 'create'])->name('insertpembayaran');

// Route::get('/tampilkanpembayaran/{$id}',[pembayaranController::class, 'tampilkanpembayaran'])->name('tampilkanpembayaran');
// Route::post('/updatepembayaran/{$id}',[pembayaranController::class, 'updatepembayaran'])->name('updatepembayaran');

// Route::get('/daletepembayaran/{$id}',[pembayaranController::class, 'daletepembayaran'])->name('daletepembayaran');



Route::get('/tambahpemesanan',[ordersController::class, 'index'])->name('tambahpemesanan');
Route::post('/insertpemesanan',[ordersController::class, 'create'])->name('insertpemesanan');

// Route::get('/tampilkanpemesanan/{$id}',[pemesananController::class, 'tampilkanpemesanan'])->name('tampilkanpemesanan');
// Route::post('/updatepemesanan/{$id}',[pemesananController::class, 'updatepemesanan'])->name('updatepemesanan');

// Route::get('/daletepemesanan/{$id}',[pemesananController::class, 'daletepemesanan'])->name('daletepemesanan');



Route::get('/login',[loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class, 'authenticate'])->name('login.post');
Route::post('/logout',[loginController::class, 'logout'])->name('logout');

Route::get('/register',[registercontroller::class, 'index'])->name('register.index');
Route::post('/register',[registercontroller::class, 'store'])->name('register.post');

Route::get('/dashboard',[dashboardcontroller::class, 'index']);

Route::resource('/dashboard/inventory',AdmininventoryController::class)->except('show')->middleware('is_admin');
