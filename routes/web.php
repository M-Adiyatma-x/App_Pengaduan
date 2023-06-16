<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/index', function () {
    return view('index', [
        "title" => "index"
    ]);
});

Route::get('/admin', function () {
    return view('admin', [
        "title" => "admin"
    ]);
});
Route::get('/adm', function () { 
    return view('admin/v_admin'); 
});
Route::get('/admin_control', function () { 
    return view('admin/admin_control'); 
});
Route::get('/create_account', function () { 
    return view('admin/create_account'); 
});
Route::get('/edit', function () { 
    return view('admin/edit'); 
});
Route::get('/pengaduan', function () { 
    return view('admin/pengaduan'); 
});
Route::get('/detail', function () { 
    return view('admin/detail_pengaduan'); 
});
Route::get('profile', function () { 
    return view('admin/profile'); 
});
Route::get('edit_profile', function () { 
    return view('admin/edit_profile'); 
});
Route::get('/login', [LoginController::class, 'index' ])->name('login')->middleware('guest');  
Route::post('/login', [LoginController::class, 'authenticate']);  

Route::post('/logout', [LoginController::class, 'logout']);  

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');  