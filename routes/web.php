<?php

use Illuminate\Support\Facades\Auth;
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

//Normal Routing
Route::get('/renting', [App\Http\Controllers\FrontendController::class, 'tenant'])->name('tenant');
Route::get('/renting-out', [App\Http\Controllers\FrontendController::class, 'landlord'])->name('landlord');
Route::get('/blogs', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
Route::get('/tenant-faq', [App\Http\Controllers\FrontendController::class, 'tfaq'])->name('tfaq');
Route::get('/landlord-faq', [App\Http\Controllers\FrontendController::class, 'lfaq'])->name('lfaq');
Route::get('/how-to-rent', [App\Http\Controllers\FrontendController::class, 'howtorent'])->name('howtorent');
Route::get('/how-to-rent-out', [App\Http\Controllers\FrontendController::class, 'howtorentout'])->name('howtorentout');
Route::get('/how-homie-nepal-work', [App\Http\Controllers\FrontendController::class, 'howwork'])->name('work');
Route::get('/contact-us', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');

//Searching and product loook Routing
Route::get('/search',[App\Http\Controllers\FrontendController::class, 'search'])->name('search');
Route::get('/view/{id}',[App\Http\Controllers\FrontendController::class, 'looks'])->middleware(['auth', 'verified'])->name('look');
Route::get('/profile/{id}', [App\Http\Controllers\FrontendController::class, 'profile'])->name('profile')->middleware('auth');

//Listing Routing
Route::middleware(['auth','verified', 'isLandlord'])->prefix('landlord')->group(function () {
    Route::resource('listings', App\Http\Controllers\ListingController::class);
});

//Get a call routing
Route::middleware(['auth','verified'])->group(function () {
    Route::resource('calls', App\Http\Controllers\CallController::class);
});

//send Message Routing
Route::resource('messages', App\Http\Controllers\MessageController::class);

//User updating routing
Route::middleware('auth','verified')->prefix('profile')->group(function() {
    Route::resource('users', App\Http\Controllers\User\UserController::class);
});

//Admin Controller
Route::middleware(['auth', 'isAdmin','verified'])->prefix('admin')->name('admin.')->group(function() {
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
    Route::resource('tenants', App\Http\Controllers\Admin\TenantController::class);
    Route::resource('landlords', App\Http\Controllers\Admin\LandlordController::class);
    Route::resource('calls', App\Http\Controllers\Admin\CallController::class);
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
});

Route::get('dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard')->middleware(['auth', 'isAdmin','verified'])->prefix('admin');

Route::get('listings', [App\Http\Controllers\Admin\AdminController::class, 'listings'])->name('admin.listings')->middleware(['auth', 'isAdmin','verified'])->prefix('admin');

Route::get('messages', [App\Http\Controllers\Admin\AdminController::class, 'messages'])->name('admin.messages')->middleware(['auth', 'isAdmin','verified'])->prefix('admin');


require __DIR__.'/auth.php';
