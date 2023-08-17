<?php

use App\Http\Controllers\DepositController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', [InvestController::class, 'home'])->name('index');
Route::view('/properties', 'pages.properties')->name('properties');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
include 'admin.php';

Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('deposit', [DepositController::class, 'deposit'])->name('deposit');

});

