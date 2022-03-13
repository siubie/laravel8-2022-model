<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// TODO : add route
Route::get('/', [BlogController::class, 'index'])->name('news.index');
// TODO : Tambah kan route get ke url /store sambungkan ke controller BlogController dengan method store named route news.store
// TODO : Tambah kan route get ke url /update sambungkan ke controller BlogController dengan method update named route news.update
// TODO : Tambah kan route get ke url /destroy sambungkan ke controller BlogController dengan method destroy named route news.destroy

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
