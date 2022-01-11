<?php

use App\Http\Controllers\StaffController;
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



Route::prefix('/staffs')->group(function(){
    Route::get('/',[StaffController::class,"index"])->name("staffs.list");
    Route::get('/new',[StaffController::class,"creat"])->name("staffs.create");
    Route::post('/create',[StaffController::class,"store"])->name("staffs.store");
    Route::get('/edit/{id}',[StaffController::class,"edit"])->name("staffs.edit");
    Route::post('/update',[StaffController::class,"update"])->name("staffs.update");
    Route::get('/delete/{id}',[StaffController::class,"destroy"]);
    Route::get('/search',[StaffController::class,"search"])->name("search");
});
