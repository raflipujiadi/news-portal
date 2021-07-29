<?php

use App\Http\Controllers\UserController as UserController;
use App\Http\Controllers\Auth as LogoutController;
use App\Http\Controllers\views\auth as Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

// Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('artikel/{id}', function ($id) {
    return view('artikel.' . $id);
});

Route::get('pendidikan', function () {
    return view('artikel.' . 'p1');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::get('register', function () {
    return view('auth.register');
    // return Redirect::to('/');
});

Route::get('dashboard', function () {
    if (Auth::check()) {
        return view('welcome');
    } else {
        return Redirect::to('/login');
    };
});

Route::get('forgot', function () {
    return view('auth.forgot-password');
});

Route::get('about', function () {
    return view('about.app');
});

// Route::get('home', function () {
//     return view('apps.app');
// });
Route::get('investasi', function () {
    return view('investation.local');
});
Route::get('kesehatan', function () {
    // return view('health.local');
    return view('health.' . 'local');
});
Route::get('teknologi', function () {
    return view('artikel.' . 't1');
});
Route::get('loker', function () {
    return view('loker.local');
});
Route::get('toko', function () {
    return view('toko.app');
});
Route::get('toko/product', function () {
    return view('toko.product');
});

// Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');
