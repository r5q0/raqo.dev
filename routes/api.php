<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::Post('/sleep', 'App\Http\Controllers\SleepController@sleepLog');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/blog", [AdminController::class, 'postBlog']);
Route::post("/project", [AdminController::class, 'setProject']);


Route::post('/cv', function (Request $request) {
    return AdminController::setCv($request);
});
