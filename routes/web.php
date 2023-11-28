<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestedServicesController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/viewrequest', [App\Http\Controllers\HomeController::class, 'viewRequest'])->name('view-request');
Route::post('/request-service', [App\Http\Controllers\RequestedServicesController::class, 'store'])->name('requested_services.store');
Route::get('/submissions', [App\Http\Controllers\HomeController::class, 'viewSubmissions'])->name('requested_services.submissions');
