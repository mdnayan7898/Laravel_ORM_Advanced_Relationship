<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ServiceController;
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
    return "
    <div style='text-align:center;'> 
        <h1>ORM Advanced Relationship and Properties.<h1/>
        <p>Author: Mohammad Nayan </p>
        <a href='https://www.nayan.pro'>Visit: https://www.nayan.pro </a>
    </div>
    
    ";
});

Route::get('/mechanic',[MechanicController::class,'index'])->name('mechanic.index');
Route::get('/car',[CarController::class,'index'])->name('car.index');
Route::get('/owner',[OwnerController::class,'index'])->name('owner.index');
Route::get('/service',[ServiceController::class,'index'])->name('service.index');
// Route::get('/service',[ServiceController::class,'index'])->name('service.index');
