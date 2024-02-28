<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\ceo\CeoController;
use App\Http\Controllers\ceo\CompanyController;
use App\Http\Controllers\ceo\HrController;
use App\Http\Controllers\user\ApplicationController;
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

Route::middleware('auth')->group(function () {

    Route::resource('home', UserController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('applications', ApplicationController::class);
    Route::resource('users', UserController::class);

    Route::get('/profile', [App\Http\Controllers\auth\AuthController::class, 'profile'])->name('profile');
});

Route::prefix('ceo')->middleware(['is_ceo'])->group(function () {
    Route::resource('job_offers', CeoJobOfferController::class)
        ->names([
            'index' => 'ceo.job_offers.index',
            'create' => 'ceo.job_offers.create',
            'store' => 'ceo.job_offers.store',
            'show' => 'ceo.job_offers.show',
            'edit' => 'ceo.job_offers.edit',
            'update' => 'ceo.job_offers.update',
            'destroy' => 'ceo.job_offers.destroy',
        ]);
});

Route::prefix('hr')->middleware(['is_hr'])->group(function () {
    Route::resource('job_offers', HrJobOfferController::class)
        ->names([
            'index' => 'hr.job_offers.index',
            'create' => 'hr.job_offers.create',
            'store' => 'hr.job_offers.store',
            'show' => 'hr.job_offers.show',
            'edit' => 'hr.job_offers.edit',
            'update' => 'hr.job_offers.update',
            'destroy' => 'hr.job_offers.destroy',
        ]);
});



























Route::resource('categories', CategoryController::class);
Route::resource('cities', CityController::class);
Route::resource('skills', SkillController::class);
