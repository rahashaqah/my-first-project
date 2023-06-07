<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PaymentsController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/categories', function () {
//     return view('categories.inex');
// });
Route::get('/categories', [CategoryController::class, 'raha'])->name('category.index');
Route::get('/requests', [RequestController::class, 'zahi']);
Route::resource('/orders', OrderController::class);
Route::resource('/users', UsersController::class);
Route::resource('/payments', PaymentsController::class);
Route::post('/Category/store',[CategoryController::class,'store'])->name('Category.store');
Route::post('/Category/update',[CategoryController::class,'update'])->name('Category.update');
