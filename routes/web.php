<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\VotersController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\Realtime;

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
//     return view('page.proto');
// })->name('home');
Route::get('/', function () {
    return view ('page.proto');
})->name('home');

Auth::routes(['register' => false]);

// Route::get('/home', [HomeController::class, 'index'])->name('homes');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('auth/google', [UserController::class, 'google']);
Route::get('auth/google/callback', [UserController::class, 'google_callback']);

Route::resource('kandidat', KandidatController::class)->middleware('auth');
Route::resource('voters', VotersController::class)->middleware('auth');
Route::get('/userlogin',[UserController::class, 'login'])->name('userlogin');
Route::post('/cektoken',[UserController::class, 'ceklogin'])->name('ceklogin');
Route::get('/error',[UserController::class, 'error'])->name('error');
Route::get('/errors',[UserController::class, 'errors'])->name('errors');
Route::get('/errorr',[UserController::class, 'errorr'])->name('errorr');
Route::get('/errorp',[UserController::class, 'errorp'])->name('errorp');
Route::get('/voting',[VotingController::class, 'index'])->name('voting');
Route::get('/simpansuara/{id}',[VotingController::class, 'simpan'])->name('simpansuara');
Route::get('/logoutuser',[VotingController::class, 'logout'])->name('logoutuser');
Route::get('/logoutvoting',[VotingController::class, 'logoutvoting'])->name('logoutvoting');
Route::get('/bukus',[UserController::class, 'buku'])->name('buku');
Route::get('/contact',[EmailController::class, 'index']);
Route::post('/contactpost',[EmailController::class, 'post'])->name('postmail');
Route::resource('admin', AdminController::class)->middleware('auth');
Route::get('/success', [UserController::class, 'success'])->name('success');
Route::get('/realtime', [UserController::class, 'realtime'])->name('realtime');
Route::get('/cript', [UserController::class, 'export'])->name('export')->middleware('auth');
Route::get('/dashboard/realtime', [Realtime::class, 'index'])->name('admreal')->middleware('auth');
Route::get('/dashboard/chart', [ChartController::class, 'index'])->name('admch')->middleware('auth');
