<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\Admin\GuestController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MessageController;

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

Route::prefix("admin")->group(function() {
    Route::get('/', function() {return redirect('admin/guest');});
    Route::middleware(['auth'])->group(function () {
        Route::controller(GuestController::class)->group(function() {
            Route::prefix("guest")->group(function() {
                Route::get('/', 'index')->name('guest.index');
                Route::get('create', 'create')->name('guest.create');
                Route::post('/', 'store')->name('guest.store');
                Route::get('{guest}', 'show')->name('guest.show');
                Route::get('edit/{guest}', 'edit')->name('guest.edit');
                Route::patch("{guest}", "update")->name('guest.update');
                Route::delete("{guest}", "destroy")->name('guest.destroy');
                Route::get('checkSlug', 'checkSlug');
                Route::post('send{guest}', 'send')->name('guest.send');
            });
        });
        Route::controller(MessageController::class)->group(function () {
            Route::get('message', 'index')->name('message.index');
            Route::get('message/isActive/{message}', 'isActive')->name('message.active');
        });
    });
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'index')->name("login")->middleware("guest");
        Route::post('login', 'login')->name('login.store')->middleware("guest");
        Route::post('logout', 'logout')->name('logout')->middleware("auth");
    });
});


Route::get('/{guest:slug}', [InvitationController::class, 'index']);