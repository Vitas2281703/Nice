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

Route::get('/', [\App\Http\Controllers\Web\MainController::class, 'index'])->name('home');

Route::get('/about-us', [\App\Http\Controllers\Web\AboutController::class, 'index'])->name('about-us');

Route::get('/promotion/{slug}', [\App\Http\Controllers\Web\PromotionController::class, 'index'])->name('promo');

Route::get('/all-news', [\App\Http\Controllers\Web\NewsController::class, 'allNews'])->name('all-news');
Route::get('/news/{slug}', [\App\Http\Controllers\Web\NewsController::class, 'news'])->name('news');

Route::get('/service', [\App\Http\Controllers\Web\ServiceController::class, 'index'])->name('service');


Route::view('/login', 'login')->name('login');
Route::view('/registration', 'registration')->name('registration');
Route::post('/login', [\App\Http\Controllers\Web\AuthController::class, 'login'])->name('login-post');
Route::post('/registration', [\App\Http\Controllers\Web\AuthController::class, 'registration'])->name('registration-post');
Route::get('/logout', [\App\Http\Controllers\Web\AuthController::class, 'logout'])->name('logout');


Route::get('/account', [\App\Http\Controllers\Web\AccountController::class, 'account'])->name('account');

Route::get('/cart', [\App\Http\Controllers\Web\OrderController::class, 'cart'])->name('cart');
Route::get('/order/{order_id}', [\App\Http\Controllers\Web\OrderController::class, 'getOrder'])->name('order');
Route::get('/preorder', [\App\Http\Controllers\Web\OrderController::class, 'preorder'])->name('preorder');

Route::view('/user-agreement', 'user-agreement')->name('user-agreement');

Route::get('/add-order', [\App\Http\Controllers\Web\OrderController::class, 'addOrder'])->name('add-order');
