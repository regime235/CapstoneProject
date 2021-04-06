<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegistrationController;

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

Route::group(['middleware' => ['auth', 'admin']], function() {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/home', function () {
        return view('admin.home');
    });

    Route::get('/user', [App\Http\Controllers\Admin\ListController::class, 'userlist']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registration', [App\Http\Controllers\Officer\RegistrationController::class, 'register']);

Route::get('/map', [App\Http\Controllers\Officer\MapController::class, 'maps']);

Route::get('/transaction', [App\Http\Controllers\Officer\ListController::class, 'index'])->name('transaction');
Route::post('/register-save', [App\Http\Controllers\Officer\ListController::class, 'store']);
Route::get('/transaction-edit{id}', [App\Http\Controllers\Officer\ListController::class, 'edit'])->name('transaction-edit');
// Route::get('/transaction-update', [App\Http\Controllers\Officer\ListController::class, 'update'])->name('transaction.update');

