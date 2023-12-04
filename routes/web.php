<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestedServicesController;
use App\Models\User;

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
    // Return all the users to the blade file
    $users = User::all();
    return view("welcome")->with("users", $users);
});

Route::get('/request-client/{clientId}', [App\Http\Controllers\HomeController::class, 'showClient'])
    ->name('request-client');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/viewrequest', [App\Http\Controllers\HomeController::class, 'viewRequest'])->name('view-request');
Route::post('/request-service', [App\Http\Controllers\RequestedServicesController::class, 'store'])->name('requested_services.store');
Route::get('/submissions', [App\Http\Controllers\HomeController::class, 'viewSubmissions'])->name('requested_services.submissions');
Route::get('/ewsponses', [App\Http\Controllers\HomeController::class, 'viewResponses'])->name('requested_services.responses');
Route::post('/respond-client', [App\Http\Controllers\HomeController::class, 'respondClient'])->name('respond_client.store');
Route::get('/client-responses', [App\Http\Controllers\HomeController::class, 'viewResponses'])->name('requested_services.client-responses');

