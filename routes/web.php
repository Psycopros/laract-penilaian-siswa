<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\GuruControllers;
use App\Http\Controllers\JurusanControllers;
use App\Http\Controllers\MapelControllers;
use App\Http\Controllers\KelasControllers;
use App\Http\Controllers\SiswaControllers;
use App\Http\Controllers\MengajarControllers;
use App\Http\Controllers\NilaiControllers;


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
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Login
Route::get('/', [IndexController::class, 'index']);
Route::get('/login/admin', [IndexController::class, 'loginAdmin']);
Route::get('/login/guru', [IndexController::class, 'loginSiswa']);
Route::get('/login/siswa', [IndexController::class, 'loginGuru']);
Route::get('/logout', [IndexController::class, 'logout']);


//HomePage
Route::get('/home', [IndexController::class, 'home']);

//Guru
route::prefix('guru')->group(function() {
    route::get('/index', [GuruControllers::class, 'index']);
    route::get('/create', [GuruControllers::class, 'create']);
    route::post('/store', [GuruControllers::class, 'store']);
    route::get('/edit/{guru}', [GuruControllers::class, 'edit']);
    route::post('/update/{guru}', [GuruControllers::class, 'update']);
    route::get('/destroy/{guru}', [GuruControllers::class, 'destroy']);

});

//jurusan
route::prefix('jurusan')->group(function () {
    route::get('/index', [JurusanControllers::class, 'index']);
    route::get('/create', [JurusanControllers::class, 'create']);
    route::post('/store', [JurusanControllers::class, 'store']);
    route::get('/edit/{jurusan}', [JurusanControllers::class, 'edit']);
    route::post('/update/{jurusan}', [JurusanControllers::class, 'update']);
    route::get('/destroy/{jurusan}', [JurusanControllers::class, 'destroy']);
});

//mapel
route::prefix('mapel')->group(function () {
    route::get('/index', [MapelControllers::class, 'index']);
    route::get('/create', [MapelControllers::class, 'create']);
    route::post('/store', [MapelControllers::class, 'store']);
    route::get('/edit/{mapel}', [MapelControllers::class, 'edit']);
    route::post('/update/{mapel}', [MapelControllers::class, 'update']);
    route::get('/destroy/{mapel}', [MapelControllers::class, 'destroy']);
});

//kelas
route::prefix('kelas')->group(function () {
    route::get('/index', [KelasControllers::class, 'index']);
    route::get('/create', [KelasControllers::class, 'create']);
    route::post('/store', [KelasControllers::class, 'store']);
    route::get('/edit/{kelas}', [KelasControllers::class, 'edit']);
    route::post('/update/{kelas}', [KelasControllers::class, 'update']);
    route::get('/destroy/{kelas}', [KelasControllers::class, 'destroy']);
});

//siswa
route::prefix('siswa')->group(function () {
    route::get('/index', [SiswaControllers::class, 'index']);
    route::get('/create', [SiswaControllers::class, 'create']);
    route::post('/store', [SiswaControllers::class, 'store']);
    route::get('/edit/{siswa}', [SiswaControllers::class, 'edit']);
    route::post('/update/{siswa}', [SiswaControllers::class, 'update']);
    route::get('/destroy/{siswa}', [SiswaControllers::class, 'destroy']);
});

//mengajar
route::prefix('mengajar')->group(function () {
    route::get('/index', [MengajarControllers::class, 'index']);
    route::get('/create', [MengajarControllers::class, 'create']);
    route::post('/store', [MengajarControllers::class, 'store']);
    route::get('/edit/{mengajar}', [MengajarControllers::class, 'edit']);
    route::post('/update/{mengajar}', [MengajarControllers::class, 'update']);
    route::get('/destroy/{mengajar}', [MengajarControllers::class, 'destroy']);
});

//nilai
route::prefix('nilai')->group(function () {
    route::get('/index', [NilaiControllers::class, 'index']);
    route::get('/create', [NilaiControllers::class, 'create']);
    route::post('/store', [NilaiControllers::class, 'store']);
    route::get('/edit/{nilai}', [NilaiControllers::class, 'edit']);
    route::post('/update/{nilai}', [NilaiControllers::class, 'update']);
    route::get('/destroy/{nilai}', [NilaiControllers::class, 'destroy']);
});