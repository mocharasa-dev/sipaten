<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', [FrontendController::class, 'notFound'])->name('frontend.undefined');
Route::get('/beranda', [FrontendController::class, 'index'])->name('frontend.beranda');
Route::get('/login', [FrontendController::class, 'login'])->name('frontend.login');
Route::get('/register', [FrontendController::class, 'register'])->name('frontend.register');
Route::get('/kritik-saran', [FrontendController::class, 'kritsar'])->name('frontend.saran');

Route::get('/form', [FrontendController::class, 'formContoh'])->name('frontend.form');
Route::get('/form/validate', [FrontendController::class, 'formValidate'])->name('frontend.form.validate');