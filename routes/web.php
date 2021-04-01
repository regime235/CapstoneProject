<?php

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
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vehicle-register', [App\Http\Controllers\Officer\RegistrationController::class, 'registered']);

Route::get('/map', [App\Http\Controllers\Officer\MapController::class, 'maps']);

Route::get('/transaction', [App\Http\Controllers\Officer\ListController::class, 'transactionList']);

Route::group(['middleware' => ['auth', 'admin']], function() {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});

