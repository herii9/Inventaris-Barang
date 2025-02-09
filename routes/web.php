<?php

use App\Http\Middleware\IsLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//login
Route::get('/login', [AuthController::class, 'loginView']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::get('/', [DashboardController::class, 'index']);

//middleware
Route::middleware(IsLogin::class)->group(function(){
    //Inventaris
    Route::get('/inventories', [InventoryController::class, 'index']);
    Route::get('/inventories/create', [InventoryController::class, 'create']);
    Route::get('/inventories/edit/{id}', [InventoryController::class, 'edit']);
    Route::put('/inventories/{id}', [InventoryController::class, 'update']);
    Route::post('/inventories/store', [InventoryController::class, 'store']);
    Route::delete('/inventories/{id}', [InventoryController::class, 'delete']);

    //cetak
    Route::get('/cetak', [InventoryController::class, 'cetak']);
    
    //Pegawai
    Route::get('/employees', [EmployeeController::class, 'index']);
    Route::get('/employees/create', [EmployeeController::class, 'create']);
    Route::get('/employees/edit/{id}', [EmployeeController::class, 'edit']);
    Route::put('/employees/{id}', [EmployeeController::class, 'update']);
    Route::post('/employees/store', [EmployeeController::class, 'store']);
    Route::delete('/employees/{id}', [EmployeeController::class, 'delete']);
});
    