<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminDepositController;
use App\Http\Controllers\Admin\AdminFundingController;
use App\Http\Controllers\Admin\AdminImageController;
use App\Http\Controllers\Admin\AdminWithdrawalController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('users', [UserController::class, 'users'])->name('users');
    Route::get('users/detail/{id}', [UserController::class, 'userDetail'])->name('userDetail');

    Route::resource('property', PropertyController::class);
    Route::resource('payment-method', PaymentMethodController::class);
    Route::resource('funding', AdminFundingController::class);

    Route::get('deposits', [AdminDepositController::class, 'deposits'])->name('deposits');
    Route::get('approve/deposit/{id}', [AdminDepositController::class, 'acceptDeposit'])->name('acceptDeposit');
    Route::delete('delete/{id}', [AdminDepositController::class, 'deleteDeposit'])->name('deleteDeposit');
    Route::get('accept/deposit/{id}', [AdminDepositController::class, 'approveDeposit'])->name('approveDeposit');
    Route::get('withdrawal', [AdminWithdrawalController::class, 'withdrawal'])->name('withdrawal');

    Route::get('image/{id}', [AdminImageController::class, 'image'])->name('image');
    Route::post('storeImage/', [AdminImageController::class, 'storeImage'])->name('storeImage');
});
