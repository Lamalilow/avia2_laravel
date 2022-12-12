<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::middleware(\App\Http\Middleware\UserAccess::class)->group(function (){
    Route::get('logout', [UserController::class, 'logout'])->name('logout');

    Route::get('admin', [AdminController::class, 'adminView'])->middleware('AdminAccess')->name('admin');

    Route::get('admin/createPlane', [AdminController::class, 'createAirPlaneView'])->middleware('AdminAccess')->name('createPlane');
    Route::post('admin/createPlane', [AdminController::class, 'createAirPlanePost']);

    Route::post('admin/deletePlane/{plane}', [AdminController::class, 'deleteAirPlanePost'])->middleware('AdminAccess')->name('deletePlane');
    Route::post('admin/createFlight', [AdminController::class, 'createFlightPost']);
    Route::get('admin/createFlight', [AdminController::class, 'createFlightView'])->middleware('AdminAccess')->name('createFlight');

});
Route::get('/', [MainController::class, 'mainView'])->name('/');
Route::get('login', [UserController::class, 'loginView'])->name('login');
Route::post('login', [UserController::class, 'loginPost']);
Route::get('registration', [UserController::class, 'registrationView'])->name('registration');
Route::post('registration', [UserController::class, 'registrationPost']);

Route::get('warning', [UserController::class, 'warningView'])->name('warning');
