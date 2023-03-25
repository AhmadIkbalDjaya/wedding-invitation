<?php

use Illuminate\Support\Facades\Route;
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
            Route::get('index', 'index');
            Route::get('create', 'create');
            Route::get('edit', 'edit');
            Route::post('/', 'store');
            Route::get('checkSlug', 'checkSlug');
        });
    });
});

// Route::get('admin/guest', function () {
//     return view('admin.guest.index');
// });
// Route::get('admin/guest/create/', function () {
//     return view("admin.guest.create");
// });
// Route::get('admin/guest/edit', function () {
//     return view("admin.guest.edit");
// });
Route::get('admin/message', function () {
    return view("admin.message.index");
});
Route::get('admin/login', function () {
    return view("admin.login");
});