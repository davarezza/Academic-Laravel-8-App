<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\NilaiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [GuestController::class, 'index'])->name('home');

Route::get('/aboutme', [GuestController::class, 'aboutme'])->name('aboutme');

Route::get('/about', [GuestController::class, 'about'])->name('about');

Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
Route::post('/contact', [GuestController::class, 'send']);
Route::get('/message', [GuestController::class, 'message'])->name('message');
// Route::post('/contact', function(App\Http\Requests\ContactRequest $request) {
//     return back()->with('berhasil', 'Data Success');
// });

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);

Route::get('/laporan', function () {
    return view('laporan.index', ['active' => 'laporan']);
})->middleware('auth')->name('laporan');

Route::resource('/laporan/nilai', NilaiController::class)->middleware('auth');