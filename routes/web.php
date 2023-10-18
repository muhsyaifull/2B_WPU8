<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResumeController;
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

Route::get('/', function () {
    return view('DataDiri');
});

Route::get('/Home', function () {
    return view('Home');
})->name('homepage');

Route::get('/ProfilePage/{id}', [ProfileController::class, 'showProfile'])->name('profil.show');
Route::resource('cliv',ProfileController::class);

Route::get('/DataDiri', function () {
    return view('DataDiri');
});

Route::get('/Pendidikan', function () {
    return view('RiwayatPendidikan');
});

Route::get('/Prestasi', function () {
    return view('Prestasi');
});

Route::get('/Organisasi', function () {
    return view('Organisasi');
});

Route::get('/register', function () {
    return view('Register');
})->name('register-page');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/Login', function () {
    return view('Login');
})->name('login-page');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/resume', [ResumeController::class, 'create']);
Route::post('/resume/store', [ResumeController::class, 'store']);

Route::get('/cv/{id}', [CvController::class, 'show']);

Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
