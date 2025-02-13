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
use App\Http\Controllers\newbillController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\UserController;




Route::get('/login', [LoginController::class, 'index']);
Route::post('/login_check', [LoginController::class, 'check_password'])->name('login.check');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::middleware(['checkAdminLogin'])->group(function () {

    Route::get('/', function () {
        return view('home'); 
    })->name('home');
    
    Route::get('/newbill', function () {
        return view('newbill'); 
    })->name('newbill');
    
    Route::get('/car', function () {
        return view('car'); 
    })->name('car');
    
    
    
    Route::get('/sucss', function () {
        return view('sucss'); 
    })->name('sucss');



    Route::post('/newbill', [newbillController::class, 'store'])->name('new.store');
    Route::get('/bills', [newbillController::class, 'index'])->name('bills');
    Route::get('/car', [newbillController::class, 'products'])->name('car');
    Route::get('/add', [newbillController::class, 'add'])->name('new.add');
    Route::post('/adden', [newbillController::class, 'adden'])->name('new.adden');
    Route::get('/clients', [ClientController::class, 'show'])->name('clients');
    Route::get('/dues', [ClientController::class, 'show_d'])->name('dues');
    Route::get('/get-car-details', [newbillController::class, 'get'])->name('getCarDetails');
    Route::post('post_pass', [UserController::class, 'post_pass'])->name('pass.store');
    Route::get('update_pass', [UserController::class, 'update_pass'])->name('update_pass');
    

 });