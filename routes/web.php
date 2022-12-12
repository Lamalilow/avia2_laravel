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

Route::get('/', function () {
    return view('welcome');
})->name('/');
Route::middleware('UserAccess')->group(function (){
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    Route::get('admin', [AdminController::class, 'adminView'])->name('admin');
    Route::get('admin/createPlane', [AdminController::class, 'createAirPlaneView'])->name('createPlane');
    Route::post('admin/createPlane', [AdminController::class, 'createAirPlanePost']);
});
Route::get('login', [UserController::class, 'loginView'])->name('login');
Route::post('login', [UserController::class, 'loginPost']);
Route::get('registration', [UserController::class, 'registrationView'])->name('registration');
Route::post('registration', [UserController::class, 'registrationPost']);

Route::get('warning', [UserController::class, 'warningView'])->name('warning');
