<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Models\FeedbackModel;

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

Route::get('/', [MyController::class, 'index']);
Route::get('/contact', [MyController::class, 'contact']);
Route::post('/contact', [MyController::class, 'getData']);
Route::get('/about', [MyController::class, 'about']);
Route::get('/showContact', [MyController::class, 'showContact']);
Route::get('/showContact/edit/{id}', [MyController::class, 'edit'])->name('showContact.edit');
Route::post('/showContact/update/{id}', [MyController::class, 'update'])->name('showContact.update');
Route::get('/showContact/delete/{id}', [MyController::class, 'delete'])->name('showContact.delete');
