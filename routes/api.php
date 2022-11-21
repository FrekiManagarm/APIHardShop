<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BoitierController;
use App\Http\Controllers\Api\ConfigController;
use App\Http\Controllers\Api\CoolingController;
use App\Http\Controllers\Api\CPUController;
use App\Http\Controllers\Api\GPUController;
use App\Http\Controllers\Api\HDDController;
use App\Http\Controllers\Api\MotherBoardController;
use App\Http\Controllers\Api\PSUController;
use App\Http\Controllers\Api\RAMController;
use App\Http\Controllers\Api\SSDController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// CPU
Route::get('/CPUs', [CPUController::class, 'index']);
Route::get('/CPU/{id}', [CPUController::class, 'show']);

// GPU
Route::get('/GPUs', [GPUController::class, 'index']);
Route::get('/GPU/{id}', [GPUController::class, 'show']);

// RAM
Route::get('/RAMs', [RAMController::class, 'index']);
Route::get('/RAM/{id}', [RAMController::class, 'show']);

// MotherBoard
Route::get('/MotherBoards', [MotherBoardController::class, 'index']);
Route::get('/MotherBoard/{id}', [MotherBoardController::class, 'show']);

// Cooling
Route::get('/Coolings', [CoolingController::class, 'index']);
Route::get('/Cooling/{id}', [CoolingController::class, 'show']);

// SSD
Route::get('/SSDs', [SSDController::class, 'index']);
Route::get('/SSD/{id}', [SSDController::class, 'show']);

// HDD
Route::get('/HDDs', [HDDController::class, 'index']);
Route::get('/HDD/{id}', [HDDController::class, 'show']);

// Boitier
Route::get('/Boitiers', [BoitierController::class, 'index']);
Route::get('/Boitier/{id}', [BoitierController::class, 'show']);

// PSU
Route::get('/PSUs', [PSUController::class, 'index']);
Route::get('/PSU/{id}', [PSUController::class, 'show']);

// Configuration
Route::get('/Configs', [ConfigController::class, "index"]);
Route::get('/Config/{id}', [ConfigController::class, "show"]);

Route::middleware('auth:api')->group(function () {

    // User
    Route::get('/get-user', [AuthController::class, 'userInfo']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // CPU
    Route::post('/CPU', [CPUController::class, 'store']);
    Route::patch('/CPU/{id}', [CPUController::class, 'update']);
    Route::delete('/CPU/{id}', [CPUController::class, 'delete']);

    // GPU
    Route::post('/GPU', [GPUController::class, 'store']);
    Route::patch('/GPU/{id}', [GPUController::class, 'update']);
    Route::delete('/GPU/{id}', [GPUController::class, 'delete']);
    
    // RAM
    Route::post('/RAM', [RAMController::class, 'store']);
    Route::patch('/RAM/{id}', [RAMController::class, 'update']);
    Route::delete('/RAM/{id}', [RAMController::class, 'delete']);

    // MotherBoard
    Route::post('/MotherBoard', [MotherBoardController::class, 'store']);
    Route::patch('/MotherBoard/{id}', [MotherBoardController::class, 'update']);
    Route::delete('/MotherBoard/{id}', [MotherBoardController::class, 'delete']);

    // Cooling
    Route::post('/Cooling', [CoolingController::class, 'store']);
    Route::patch('/Cooling/{id}', [CoolingController::class, 'update']);
    Route::delete('/Cooling/{id}', [CoolingController::class, 'delete']);

    // SSD
    Route::post('/SSD', [SSDController::class, 'store']);
    Route::patch('/SSD/{id}', [SSDController::class, 'update']);
    Route::delete('/SSD/{id}', [SSDController::class, 'delete']);

    // HDD
    Route::post('/HDD', [HDDController::class, 'store']);
    Route::patch('/HDD/{id}', [HDDController::class, 'update']);
    Route::delete('/HDD/{id}', [HDDController::class, 'delete']);

    // PSU
    Route::post('/PSU', [PSUController::class, 'store']);
    Route::patch('/PSU/{id}', [PSUController::class, 'update']);
    Route::delete('/PSU/{id}', [PSUController::class, 'delete']);

    // Boitier
    Route::post('/Boitier', [BoitierController::class, 'store']);
    Route::patch('/Boitier/{id}', [BoitierController::class, 'update']);
    Route::delete('/Boitier/{id}', [BoitierController::class, 'delete']);

    // Configuration
    Route::get('/myConfigs', [ConfigController::class, "myConfigs"]);
    Route::post('/Config', [ConfigController::class, "createDraft"]);
    Route::patch('/Config/{id}', [ConfigController::class, "pushToDraft"]);
    Route::delete('/Config/{id}', [ConfigController::class, "delete"]);

    // Configurator
    Route::get('/HDD/{capacity}', [HDDController::class, 'byCapacity']);
    Route::get('/SSD/{marque}', [SSDController::class, 'byMarque']);
    Route::get('/SSD/{capacity}', [SSDController::class, 'byCapacity']);
    Route::get('/RAM/{interface}', [RAMController::class, 'interface']);
    Route::get('/RAM/{capacity}', [RAMController::class, 'capacity']);
    Route::get('/PSU/{power}', [PSUController::class, 'byPower']);
    Route::get('/PSU/{format}', [PSUController::class, 'byFormat']);
    Route::get('/MotherBoard/{proco_compatible}', [MotherBoardController::class, 'procoCompatible']);
    Route::get('/MotherBoard/{constructor}', [MotherBoardController::class, 'byConstructor']);
    Route::get('/CPU/{proco}', [CPUController::class, 'byType']);
    Route::get('/Cooling/{format}', [CoolingController::class, 'byFormat']);
    Route::get('/Cooling/{socket}', [CoolingController::class, 'bySocket']);
    Route::get('/Cooling/{type}', [CoolingController::class, 'byType']);

});
