<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ListController;


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

    Route::get('/homepage', [App\Http\Controllers\Admin\HomeController::class, 'home'])->name('admin.home');

    Route::get('/user', [App\Http\Controllers\Admin\ListController::class, 'userlist']);

    Route::get('/adminreport', [App\Http\Controllers\Admin\AdminreportController::class, 'adminreport']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registration', [App\Http\Controllers\Officer\RegistrationController::class, 'register']);

Route::get('/map', [App\Http\Controllers\Officer\MapController::class, 'maps']);

Route::get('/maps', [App\Http\Controllers\Officer\MapsController::class, 'index']);

Route::get('/report', [App\Http\Controllers\Officer\ReportController::class, 'index']);

Route::get('/tracker', [App\Http\Controllers\Officer\TrackerController::class, 'index']);

Route::get('/transaction', [App\Http\Controllers\Officer\ListController::class, 'index'])->name('transaction');
Route::post('/register-save', [App\Http\Controllers\Officer\ListController::class, 'store']);
Route::get('/lists/{vehicle}', [App\Http\Controllers\Officer\ListController::class, 'edit']);
Route::put('/lists-update/{vehicle}', [App\Http\Controllers\Officer\ListController::class, 'update'])->name('lists.update');
Route::delete('/lists-delete/{vehicle}', [App\Http\Controllers\Officer\ListController::class, 'destroy'])->name('lists.delete');
