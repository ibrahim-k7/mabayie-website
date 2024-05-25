<?php

use App\Http\Controllers\VehicleSalesContractsController;
use App\Http\Middleware\checkAdminOrUser;
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

// Route::get('/', function () {
//     return view('test');
// });

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('user.views.home');
// });

Auth::routes();

Route::get('/home/admin', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('admin.home')->middleware('isAdmin');

Route::get('/check', function () {
})->middleware(checkAdminOrUser::class);

Route::get('/home/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home')->middleware('isUser');

    //product catalogue
    Route::controller(VehicleSalesContractsController::class)->group(
        function () {
            Route::get('/Show/SalesContracts', 'index')->name('user.VehicleSalesContracts.index');
        }
    );

