<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;

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










Route::group(['prefix' => 'statuses'], function(){
    Route::get('', [StatusController::class, 'index'])->name('status.index');
    Route::get('create', [StatusController::class, 'create'])->name('status.create');
    Route::post('store', [StatusController::class, 'store'])->name('status.store');
    Route::get('edit/{status}', [StatusController::class, 'edit'])->name('status.edit');
    Route::post('update/{status}', [StatusController::class, 'update'])->name('status.update');
    Route::post('delete/{status}', [StatusController::class, 'destroy'])->name('status.destroy');
    Route::get('show/{status}', [StatusController::class, 'show'])->name('status.show');
 });
 