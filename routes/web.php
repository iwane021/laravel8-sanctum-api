<?php

use App\Actions\Authentication\UpdateUserPasswordAction;
use App\Http\Controllers\CategoryController;
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

Route::put('auth/password', UpdateUserPasswordAction::class)->middleware('auth');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
