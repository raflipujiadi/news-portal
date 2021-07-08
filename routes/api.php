<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\AuthController;
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


// Route::resource('educations', EducationController::class);

// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/educations', [EducationController::class, 'index']);
Route::get('/educations/{id}', [EducationController::class, 'show']);
Route::get('/educations/search/{name}', [EducationController::class, 'search']);
// Route::get('/market', [MarketController::class, 'index']);
// Route::get('/market{id}', [MarketController::class, 'show']);


// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/educations', [EducationController::class, 'store']);
    Route::put('/educations/{id}', [EducationController::class, 'update']);
    Route::delete('/educations/{id}', [EducationController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Protected Routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
