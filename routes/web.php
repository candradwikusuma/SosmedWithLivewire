<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Account\{Edit,Show};
// use App\Http\Livewire\Status\Show;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Controllers\{TimelineController,FollowingController};
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\EmailVerificationController;



Route::middleware(['auth'])->group(function () {
    // Route::view('/', 'welcome')->name('home');
    Route::get('/',TimelineController::class)->name('timeline');
    Route::get('settings',Edit::class)->name('settings');
    Route::get('user/{identifier}',Show::class)->name('account.show');
    Route::get('status/{hash}/edit',App\Http\Livewire\Status\Edit::class)->name('status.edit');
    Route::get('status/{hash}',App\Http\Livewire\Status\Show::class)->name('status.show');
    Route::get('status/{hash}/delete',App\Http\Livewire\Status\Delete::class)->name('status.delete');
});

Route::get('user/{identifier}/{follow}',FollowingController::class)->name('account.following');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
