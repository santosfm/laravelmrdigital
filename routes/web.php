<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/admin/main', [UserController::class, 'showWelcomePage'])->name('showWelcomePage');
Route::get('/', [UserController::class, 'showWelcomePage']);
Route::get('/admin/users/create', [UserController::class, 'createUser']); 
Route::post('/admin/users/create', [UserController::class, 'saveUser'])->name('createuser'); 
Route::get('/admin/users', [UserController::class, 'showTheUsers'])->name('showusers'); 
Route::get('/admin/users/view/{id}', [UserController::class, 'viewUser'])->name('viewuser'); 
Route::post('/admin/users/update/{id}', [UserController::class, 'updateUser'])->name('updateuser'); 
Route::post('/admin/users/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteuser'); 

route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest'); 
route::post('/login', [AuthController::class, 'signin'])->name('signin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
