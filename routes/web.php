<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('isAdmin');



Route::get('/pages', [App\Http\Controllers\Admin\PagesController::class, 'index'])->name('pages');
Route::get('/pages/create', [App\Http\Controllers\Admin\PagesController::class, 'create'])->name('pages.create');




// Route::group(['prefix' => 'banner','namespace' => 'Admin'], function () {
//     Route::get('/create', 'BannerController@create')->name('dashboard.banner.create');
//     Route::post('/store', 'BannerController@store')->name('dashboard.banner.store');
//     Route::get('/view', 'BannerController@view')->name('dashboard.banner.view');
//     Route::get('/edit/{id}', 'BannerController@edit')->name('dashboard.banner.edit');
//     Route::post('/update/{id}','BannerController@update')->name('dashboard.banner.update');
//     Route::get('/destory/{id}','BannerController@destory')->name('dashboard.banner.destory');

// });