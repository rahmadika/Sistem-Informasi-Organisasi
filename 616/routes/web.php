<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\GuestController;
use App\Models\Anggota;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;


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
Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
// Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::prefix('admin')->group(function () {
            Route::resource('acaras',\App\Http\Controllers\Admin\AcaraController::class);
            Route::resource('transactions',\App\Http\Controllers\Admin\TransactionController::class);
            Route::get('kredit',[\App\Http\Controllers\Admin\TransactionController::class, 'kredit'])->name('kredit');
            Route::get('showtransaction/{transactions}',[\App\Http\Controllers\Admin\TransactionController::class, 'show'])->name('transactions.show');
            Route::resource('news',\App\Http\Controllers\Admin\NewsController::class);
            Route::resource('anggotas',\App\Http\Controllers\Admin\AnggotaController::class);
            Route::resource('dashboard',\App\Http\Controllers\Admin\DashboardController::class);
            Route::resource('register',\App\Http\Controllers\Admin\RegistrationController::class);
            Route::resource('admin',\App\Http\Controllers\Admin\PPAdminController::class);
            // Route::get('adminedit/{admin}',[\App\Http\Controllers\Admin\PPAdminController::class,'edit'])->name('admin.edit');
            // Route::get('/register', [\App\Http\Controllers\Admin\RegistrationController::class, 'index'])->name('register.index');
            // Route::get('/register', [\App\Http\Controllers\Admin\RegistrationController::class, 'create'])->name('register.create');
            // Route::post('register', [\App\Http\Controllers\Admin\RegistrationController::class, 'store'])->name('register.store');
        
        });
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::prefix('user')->group(function(){
            Route::get('welcome',[\App\Http\Controllers\User\UserController::class, 'home'])->name('welcome.home');
            Route::get('about',[\App\Http\Controllers\User\UserController::class, 'tentang'])->name('about.tentang');
            Route::get('member',[\App\Http\Controllers\User\UserController::class, 'anggota'])->name('member.anggota');
            Route::get('list',[\App\Http\Controllers\User\UserController::class, 'anggotalist'])->name('member.list');
            Route::get('single-member/{anggota}',[\App\Http\Controllers\User\UserController::class, 'showmember'])->name('member.show');
            Route::get('transaction',[\App\Http\Controllers\User\UserController::class, 'keuangan'])->name('transaction.keuangan');
            Route::get('single-transaction/{transactions}',[\App\Http\Controllers\User\UserController::class, 'showtransaction'])->name('transaction.show');
            Route::get('news',[\App\Http\Controllers\User\UserController::class, 'berita'])->name('news.berita');
            Route::get('single-news/{news}',[\App\Http\Controllers\User\UserController::class, 'shownews'])->name('berita.show');
            Route::get('event',[\App\Http\Controllers\User\UserController::class, 'acara'])->name('event.acara');
            Route::get('single-event/{acara}',[\App\Http\Controllers\User\UserController::class, 'showevent'])->name('event.show');
            Route::resource('profile',\App\Http\Controllers\ProfileController::class);
            Route::get('profile',[\App\Http\Controllers\ProfileController::class,'userprofile'])->name('user.profile');
            // Route::get('edit-profile',[\App\Http\Controllers\ProfileController::class,'edit'])->name('profile.edit');
            // Route::post('update-profile',[\App\Http\Controllers\ProfileController::class,'update'])->name('profile.update');
        });
    });
});

Route::get('member',[GuestController::class, 'member'])->name('guest.member');
Route::get('list',[GuestController::class, 'anggotalist'])->name('list.member');
Route::get('single-member/{anggota}',[GuestController::class, 'membershow'])->name('show.member');
Route::get('news',[GuestController::class, 'news'])->name('guest.news');
Route::get('single-news/{news}',[GuestController::class, 'newsshow'])->name('show.news');
Route::get('/',[GuestController::class, 'home'])->name('guest.home');
Route::get('about',[GuestController::class, 'about'])->name('guest.about');


