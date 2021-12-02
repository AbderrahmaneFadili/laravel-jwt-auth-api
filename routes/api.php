<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    //Register
    Route::post('/register', [AuthController::class, 'register']);
    //Login
    Route::post('/login', [AuthController::class, 'login']);
    //logout
    Route::post('/logout', [AuthController::class, 'logout']);
    //refresh
    Route::post('/refresh', [AuthController::class, 'refresh']);
    //user profile
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});
