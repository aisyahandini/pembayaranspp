<?php


use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardSiswaController;
use App\Http\Controllers\DashboardWalikelasController;
use App\Http\Controllers\DashboardPembayaranController;
use App\Http\Controllers\DashboardJenisController;
use App\Http\Controllers\DashboardPetunjukController;
use App\Http\Controllers\DashboardTagihanController;
use App\Http\Controllers\RegisterController;
use League\CommonMark\Extension\SmartPunct\DashParser;

Route::get('/',function(){
    return view('landingpage');
});


Route::get('/register',[
    RegisterController::class,('register')
])->name('register');

Route::get('/login-page',[
    LoginController::class, ('login')
])->name('login');

Route::post('/login', [
    LoginController::class, ('authenticate')
]);

Route::post('/register-proses', [
    RegisterController::class, ('authenticate')
])->name('authenticate');

Route::post('/logout', function () {
    Auth::logout(); // Logout user
    return redirect('/'); // Redirect to landing page
})->name('logout');



Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');



Route::get('/petugas/dashboard',function(){
    return view('dashboard_petugas.index');
})->middleware('auth')->name('petugas.dashboard');



Route::get('/user/dashboard',function(){
    return view('dashboard_user.index');
})->middleware('auth')->name('user.dashboard');





Route::resource('dashboard/siswa', DashboardSiswaController::class)
->middleware('auth');

Route::resource('dashboard/walikelas', DashboardWalikelasController::class)
->middleware('auth');

Route::resource('dashboard/pembayaran', DashboardPembayaranController::class)
->middleware ('auth');

Route::resource('dashboard/tagihan', DashboardTagihanController::class)
->middleware('auth');

Route::resource('dashboard/petunjuk', DashboardPetunjukController::class)
->middleware('auth');

Route::resource('dashboard/jenis', DashboardJenisController::class)
->middleware('auth');



