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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user', [App\Http\Controllers\usercontroller::class, 'index'])->middleware(['CheckLevel:administrator'])->name('user.index');
Route::get('user/create', [App\Http\Controllers\usercontroller::class, 'create'])->middleware(['CheckLevel:administrator'])->name('user.create');
Route::post('user/store', [App\Http\Controllers\usercontroller::class, 'store'])->middleware(['CheckLevel:administrator'])->name('user.store');
Route::get('user/edit/{id}', [App\Http\Controllers\usercontroller::class, 'edit'])->middleware(['CheckLevel:administrator'])->name('user.edit');
Route::put('user/update/{id}', [App\Http\Controllers\usercontroller::class, 'update'])->middleware(['CheckLevel:administrator'])->name('user.update');
Route::get('user/show/{id}', [App\Http\Controllers\usercontroller::class, 'show'])->middleware(['CheckLevel:administrator'])->name('user.show');
Route::delete('user/delete/{id}', [App\Http\Controllers\usercontroller::class, 'destroy'])->middleware(['CheckLevel:administrator'])->name('user.delete');
