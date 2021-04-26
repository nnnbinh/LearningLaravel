<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
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

Route::get('/', ['App\Http\Controllers\HelloController', 'index'])->name('index');
Route::get('/page1', ['App\Http\Controllers\HelloController','page1']);
Route::get('/page2', ['App\Http\Controllers\HelloController','page2']);
Route::get('/page3', ['App\Http\Controllers\HelloController','page3']);

Route::get('login',['App\Http\Controllers\AuthController','login'])->name('login');
Route::post('login',['App\Http\Controllers\AuthController','authenticate'])->name('authenticate');
Route::post('logout',[AuthController::class,'logout'])->name('logout');

Route::resources(['shops' => ShopController::class]);
Route::resources(['products' => ProductController::class]);

Route::get('/test',['App\Http\Controllers\TestController','index']);

Route::get('/session', function() {
    session(['name' => 'Lê Chí Huy']);
});