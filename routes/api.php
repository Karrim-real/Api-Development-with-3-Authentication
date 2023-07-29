<?php

use App\Http\Controllers\Api\Auth\UserAuthController;
use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function(){
    Route::apiResource('employee', EmployeeController::class);

    Route::controller(UserAuthController::class)->group(function(){

        Route::prefix('auth')->group(function(){
            Route::post('register', 'Register');
            Route::post('login', 'Login');
        });

        // Route::group(["middleware" => ["auth:sanctum"]], function(){

            Route::middleware(['auth:sanctum'])->group(function(){

                Route::prefix('user')->group(function(){
                    Route::get('profile', 'Profile');
                    Route::put('profile', 'Profile');
                    Route::post('refresh-token', 'RefreshToken');
                    Route::get('logout', 'Logout');
                });
            });


        // });


    });

});
