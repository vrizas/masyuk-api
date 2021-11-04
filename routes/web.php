<?php

use App\Http\Controllers\ResepController;
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

Route::get('/', [ResepController::class, 'getResepHome']);
Route::get('/admin', function () {
    return view('admin');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// http://127.0.0.1:8000/dennis
Route::get('/dennis', function () {
    return view('member.profile');
});