<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Backend\CardController;
use App\Http\Controllers\Backend\DenominationController;
use App\Http\Controllers\Frontend\FrontendController;
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

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/transaction/{reference}', 'TransactionStatus')->name('transactionstatus');
});


Route::controller(AdminAuthController::class)->group(function () {

    Route::prefix('auth')->group(function () {
        Route::get('login', 'Login')->name('auth.login');
        Route::get('signup', 'Register')->name('auth.signup');
        Route::post('login-post', 'loginPost')->name('auth.login-post');

        Route::get('logout', 'Logout')->name('auth.logout')->middleware('auth');
    });

        Route::get('admin/dashboard', 'Dashboard')->name('admin.dashboard')->middleware('auth');
});


Route::middleware('auth')->group(function(){

    Route::prefix('admin')->group(function(){
        Route::resource('denomination', DenominationController::class);
        Route::get('denomination_delete/{id}', [DenominationController::class, 'destroy'])->name('denomination.delete');
        Route::resource('card', CardController::class);
    });

});



