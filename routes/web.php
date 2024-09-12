<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/',function(){
    return view('landingpage');
});

Route::get('/login-page',[
    LoginController::class, ('login')
])->name('login');

Route::post('/login', [
    LoginController::class, ('authenticate')
]);

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');

Route::post('/logout', function () {
    Auth::logout(); // Logout user
    return redirect('/'); // Redirect to landing page
})->name('logout');





