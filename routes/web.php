<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminController;

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

Route::get('/sleep', function () {
    return view('sleep');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get("blog", [BlogController::class, 'blogPublic']);

Route::get('blog/{id}', function ($id) {
    return BlogController::getPost($id);
});

Route::get('projects', function () {
    return ProjectController::getPage();
});
Route::get('services', function () {
    return view('services');
});
Route::get('/admin/l', function () {
    return view('login');
});
Route::post('/admin/login', [AdminController::class, 'login']);