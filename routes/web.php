<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\ceo\CeoController;
use App\Http\Controllers\ceo\HrController;
use App\Http\Controllers\ceo\JobOfferController as CeoJobOfferController;
use App\Http\Controllers\hr\JobOfferController as HrJobOfferController;
use App\Http\Controllers\user\UserController;
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
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Route::resource('dashboard', AdminUserController::class);

Route::middleware(['auth', 'dashboard'])->group(function () {

    Route::resource('dashboard', AdminUserController::class);
    Route::resource('users', UserController::class);

    Route::get('/profile', [App\Http\Controllers\auth\AuthController::class, 'profile'])->name('profile');
});


Route::prefix('ceo')->middleware(['is_ceo'])->group(function () {
    Route::resource('job_offers', CeoJobOfferController::class);
});

Route::prefix('hr')->middleware(['is_hr'])->group(function () {
    Route::resource('job_offers', HrJobOfferController::class);
});


























Route::resource('categories', CategoryController::class);
Route::resource('cities', CityController::class);
Route::resource('skills', SkillController::class);
