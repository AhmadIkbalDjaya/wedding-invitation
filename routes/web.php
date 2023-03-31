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
Route::get("readMessage", [InvitationController::class, 'readMessage'])->name('read.message');
Route::post('messageStore', [InvitationController::class, 'messageStore']);

// Route::get('/', [InvitationController::class, 'index']);
// Route::post('wishes', [InvitationController::class, "wishes"]);

Route::prefix("admin")->group(function() {
    Route::get('/', function() {return redirect('admin/guest');});
    Route::middleware(['auth'])->group(function () {
        Route::controller(GuestController::class)->group(function() {
            Route::prefix("guest")->group(function() {
                Route::get('/', 'index');
                Route::get('create', 'create');
                Route::post('/', 'store');
                Route::get('edit/{guest}', 'edit');
                Route::patch("{guest}", "update");
                Route::get('checkSlug', 'checkSlug');
            });
        });
        Route::controller(MessageController::class)->group(function () {
            Route::get('message', 'index');
            Route::get('message/isActive/{message}', 'isActive');
        });
    });
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'index')->name("login")->middleware("guest");
        Route::post('login', 'login')->middleware("guest");
        Route::post('logout', 'logout')->middleware("auth");
    });
});


Route::get('/{guest:slug}', [InvitationController::class, 'index']);