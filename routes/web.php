<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/renting', [App\Http\Controllers\FrontendController::class, 'tenant'])->name('tenant');
Route::get('/renting-out', [App\Http\Controllers\FrontendController::class, 'landlord'])->name('landlord');
Route::get('/blogs', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
Route::get('/tenant-faq', [App\Http\Controllers\FrontendController::class, 'tfaq'])->name('tfaq');
Route::get('/landlord-faq', [App\Http\Controllers\FrontendController::class, 'lfaq'])->name('lfaq');


Route::get('/search',[App\Http\Controllers\FrontendController::class, 'search'])->name('search');
Route::get('/view/{id}',[App\Http\Controllers\FrontendController::class, 'looks'])->middleware(['auth'])->name('look');
Route::get('/profile/{id}', [App\Http\Controllers\FrontendController::class, 'profile'])->name('profile')->middleware('auth');


Route::middleware(['auth', 'isLandlord'])->prefix('landlord')->group(function () {
    Route::resource('listings', App\Http\Controllers\ListingController::class);
});

Route::middleware('auth')->prefix('profile')->group(function() {
    Route::resource('users', App\Http\Controllers\User\UserController::class);
});

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function() {
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
    Route::resource('tenants', App\Http\Controllers\Admin\TenantController::class);
    Route::resource('landlords', App\Http\Controllers\Admin\LandlordController::class);
});

Route::get('dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard')->middleware(['auth', 'isAdmin'])->prefix('admin');
Route::get('listings', [App\Http\Controllers\Admin\AdminController::class, 'listings'])->name('admin.listings')->middleware(['auth', 'isAdmin'])->prefix('admin');


require __DIR__.'/auth.php';
