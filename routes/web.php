<?php

use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
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
// <=============Route================>
Route::get('/', function () {
    return view('HomeUser');
});


// ==============Login================
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
// -------------------------------------------------


// ===========Sidebar==========
Route::get('/e', function () {
    return view('HomeUser');
})->name('dashboard');

Route::get('/z', function () {
    return view('register');
});

Route::get('/a', function () {
    return view('FieldProfile');
});
Route::resource('cliv',ProfileController::class);
Route::post('/Create-Profile',[ProfileController::class,'store'])->name('createProfile');
Route::put('/Update-Profile',[ProfileController::class,'update'])->name('updateProfile');

Route::post('/create', [ProfileController::class, 'store'])->name('store-profile');
Route::put('/update/{id}', [ProfileController::class, 'update'])->name('update-profile');

Route::get('/b', function () {
    return view('RiwayatPendidikan');
});
Route::post('/pendidikan/store', [PendidikanController::class, 'store']);


Route::get('/c', function () {
    return view('Pekerjaan');
});
Route::post('/pekerjaan/store', [PekerjaanController::class, 'store']);

Route::get('/d', function () {
    return view('Skill');
});
Route::post('/skill/store', [SkillController::class, 'store']);
Route::post('/skill/saveData', [SkillController::class, 'saveData'])->name('skill.saveData');

Route::get('/f', function () {
    return view('TemplateCV1');
})->name('dashboard');
// -------------------------------------------------


Route::get('/Home', function () {
    return view('Home');
})->name('homepage');

Route::get('/navbarUser', function () {
    return view('component/navbarUser');
});

Route::get('/UserPage', function () {
    return view('HomeUser');
})->name('UserPage');

Route::get('/DaftarCV', function () {
    return view('HalamanDaftarCV');
})->name('DaftarCV');

Route::get('/ProfilePage/{id}', [ProfileController::class, 'showProfile'])->name('profil.show');


Route::get('/daftar-profile', [ProfileController::class, 'index'])->name('daftar-profile');
Route::post('/store-profile', [ProfileController::class, 'store'])->name('store-profile');
Route::delete('/profiles/{id}', [ProfileController::class, 'destroy'])->name('profiles.destroy');



Route::get('/DataDiri', function () {
    return view('DataDiri');
})->name('DataDiri');

Route::get('/Pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
Route::get('/Pendidikan/create', [PendidikanController::class, 'create'])->name('pendidikan.create');
Route::post('/Pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store');



Route::get('/Edit', function(){
    return view('EditDataDiri');
});


Route::get('/Pendidikan', function () {
    return view('RiwayatPendidikan');
});


Route::get('/Prestasi', function () {
    return view('Prestasi');
});

Route::get('/Organisasi', function () {
    return view('Organisasi');
})->name('Organisasi');

Route::get('/resume', [ResumeController::class, 'create']);
Route::post('/resume/store', [ResumeController::class, 'store']);

Route::get('/edit-profile/{id}', [ProfileController::class, 'editProfile'])->name('profile.edit');
Route::put('/update-profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/cv/{id}', [ResumeController::class, 'show']);

// Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
// Route::get('/edit-profile/{id}', [ProfileController::class, 'editProfile'])->name('edit-profile');
// Rute untuk mengupdate profil (implementasinya diperlukan dalam controller)
// Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');