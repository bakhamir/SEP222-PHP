<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exmplController;
use App\Http\Controllers\schoolController;

use App\Http\Controllers\StudentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello',[exmplController::class,'test']);

Route::post('/school',[schoolController::class,'create']);
Route::get('/school/{id}',[schoolController::class,'item']);
Route::get('/schools',[schoolController::class,'list']);
Route::post('/schoolsDel/{$id}',[schoolController::class,'del']);
Route::get('/schoolsUpd',[schoolController::class,'list']);


Route::post('/student',[StudentController::class,'create']);

Route::get('/student/{id}',[StudentController::class,'read']);
Route::post('studentUpd/{id}',[StudentController::class,'update']);
Route::post('studentDel/{id}',[StudentController::class,'delete']);

// Route::get('/schools',[schoolController::class,'list']);
// Route::post('/schoolsDel/{$id}',[schoolController::class,'del']);
// Route::get('/schoolsUpd',[schoolController::class,'list']);