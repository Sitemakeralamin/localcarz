<?php

use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dealer\DealerController;

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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dealer', [DealerController::class, 'login'])->name('dealer_login');
Route::post('/dealer/login', [DealerController::class, 'loginCheck'])->name('dealer.login');
Route::get('/dealer/register', [DealerController::class, 'register'])->name('dealer.register');
Route::post('/dealer/save', [DealerController::class, 'saveData'])->name('dealer.submit');
Route::get('/dealer/dashboard', [DealerController::class, 'dashboard'])->name('dealer.dashboard');
// Route::get('/admin', [AdminLoginController::class, 'login'])->name('login');

