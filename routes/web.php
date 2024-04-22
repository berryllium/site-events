<?php

use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/contacts', [Controller::class, 'contacts'])->name('contacts');
Route::get('/news', [Controller::class, 'news'])->name('news');
Route::get('/services', [Controller::class, 'services'])->name('services');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/detail/{id}', [Controller::class, 'detail'])->name('detail');