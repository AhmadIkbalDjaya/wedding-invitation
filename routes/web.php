<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\GuestController;

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
Route::get('admin/login', function () {
    return view("admin.login");
});