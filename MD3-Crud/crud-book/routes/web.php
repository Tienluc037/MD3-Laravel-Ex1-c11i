<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::middleware('checkAuth')->prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'showAll'])->name('book.list');
    Route::get('/{id}/detail', [BookController::class, 'detail'])->name('book.detail');
    Route::get('/create', [BookController::class, 'showFormCreate'])->name('showFormCreate');
    Route::post('/create', [BookController::class, 'create'])->name('book.create');
    Route::get('/{id}/update', [BookController::class, 'edit'])->name('book.edit');
    Route::post('/{id}/update', [BookController::class, 'update'])->name('book.update');
    Route::get('/{id}/delete', [BookController::class, 'delete'])->name('book.delete');

});


Route::get('register',[AuthController::class, 'showForm'])->name('showFormRegister');
Route::post('register',[AuthController::class, 'register'])->name('register')->middleware('checkRegister');



Route::get('login',[AuthController::class,"showFormLogin"])->name("showFormLogin");
Route::post('login',[AuthController::class,"login"])->name("login");
Route::get('logout',[AuthController::class,"logout"])->name("logout");
