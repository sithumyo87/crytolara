<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/mine', [FrontendController::class, 'mine'])->name('mine');

// routes for admin authentication
Route::get('/cryptoauth/adminlogin', 'App\Http\Controllers\AdminAuth\LoginController@showLoginForm')->name('admin.showlogin');
Route::post('/cryptoauth/adminlogin', 'App\Http\Controllers\AdminAuth\LoginController@login')->name('admin.login');
Route::post('/cryptoauth/adminlogout', 'App\Http\Controllers\AdminAuth\LoginController@logout')->name('admin.logout');

// routes for admin authenticated 
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware' => ['auth:admin', 'verified']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::get('/user/delete/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroy'])->name('user.delete');

    Route::resource('withdraw', App\Http\Controllers\Admin\WithdrawController::class);

    Route::resource('awardSetting', App\Http\Controllers\Admin\AwardSettingController::class);
    
    Route::resource('admin', App\Http\Controllers\Admin\AdminController::class);
    Route::get('/admin/delete/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroy'])->name('admin.delete');

    Route::resource('helperSetting', App\Http\Controllers\Admin\HelperSettingController::class);

    Route::resource('setting', App\Http\Controllers\Admin\SettingController::class);
    
    Route::get('/profile/edit', [App\Http\Controllers\Admin\AccountSettingController::class, 'profileEdit'])->name('profile.edit');
    Route::put('/profile/{id}/update', [App\Http\Controllers\Admin\AccountSettingController::class, 'profileUpdate'])->name('profile.update');

    Route::get('/password/edit', [App\Http\Controllers\Admin\AccountSettingController::class, 'passwordEdit'])->name('password.edit');
    Route::put('/password/{id}/update', [App\Http\Controllers\Admin\AccountSettingController::class, 'passwordUpdate'])->name('password.update');
});
