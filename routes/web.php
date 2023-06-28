<?php

//use App\Http\Controllers\Admin\AdminLoginController;
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

// Route::get('/login', function () {
//     return view('login/index', [
//         "title" => "login"
//     ]);
// });

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/statistic', function () {
    return view('/partials/statistic', [
        "title" => "Statistik"
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
/*
Route::prefix('admin')->group(function()
{
    Route::get('/login', 'Admin\AdminLoginController@ShowLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','Admin\AdminLoginController@index')->name('admin.dashboard')->middleware('admin');
});
*/

/*Login*/
    Route::get('/login', [LoginController::class, 'index' ])->name('login')->middleware('guest');  
    Route::post('/login', [LoginController::class, 'login']);  
/*------*/

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:mahasiswa'])->group(function () 
{
    Route::get('/mhs/mhsdb', [DashboardController::class, 'index'])->name('mhs.db');
});

Route::middleware(['auth', 'user-access:superadmin'])->group(function () 
{
    Route::get('/superadmin/dashboard', [DashboardController::class, 'Superadmindb'])->name('superadmin.home');
    Route::get('/superadmin/daftarakun', [DashboardController::class, 'Superadmindpakun'])->name('superadmin.dpakun');
    Route::get('/superadmin/pengaduan', [DashboardController::class, 'SuperPengaduan'])->name('superadmin.pengaduan');    
    Route::get('/superadmin/buatakun', [DashboardController::class, 'Supercracc'])->name('superadmin.buatakun');    
    Route::get('/superadmin/detail', [DashboardController::class, 'Superdtpengaduan'])->name('superadmin.dtpengaduan');
    Route::get('/superadmin/edit', [DashboardController::class, 'SuperEdit'])->name('superadmin.edit');    
    Route::get('/superadmin/profil', [DashboardController::class, 'SuperProfil'])->name('superadmin.profil');    
    Route::get('/superadmin/edit_profil', [DashboardController::class, 'SuperEditprofil'])->name('superadmin.editprofil');
});

Route::middleware(['auth', 'user-access:kemahasiswaan'])->group(function () 
{
    Route::get('/kemahasiswaan/home', [DashboardController::class, 'KemahasiswaanHome'])->name('kemahasiswaan.home');
    Route::get('/kemahasiswaan/pengaduan', [DashboardController::class, 'KmsPengaduan'])->name('kemahasiswaan.pengaduan');    
    Route::get('/kemahasiswaan/buatakun', [DashboardController::class, 'Kmscracc'])->name('kemahasiswaan.buatakun');    
    Route::get('/kemahasiswaan/detail', [DashboardController::class, 'Kmsdtpengaduan'])->name('kemahasiswaan.dtpengaduan');    
});

Route::middleware(['auth', 'user-access:akademik'])->group(function () 
{
    Route::get('/akademik/home', [DashboardController::class, 'AkademikHome'])->name('akademik.home');
});

Route::middleware(['auth', 'user-access:kamsisdal'])->group(function () 
{
    Route::get('/kamsisdal/home', [DashboardController::class, 'KamsisdalHome'])->name('kamsisdal.home');
});

Route::middleware(['auth', 'user-access:sarpras'])->group(function () 
{
    Route::get('/sarpras/home', [DashboardController::class, 'SarprasHome'])->name('sarpras.home');
});

Route::middleware(['auth', 'user-access:direksi'])->group(function () 
{
    Route::get('/direksi/home', [DashboardController::class, 'DireksiHome'])->name('direksi.home');
});
/*---------------*/

/*Logout*/
Route::get('/logout', [LoginController::class, 'logout']);  
/*Logout*/

//Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');  