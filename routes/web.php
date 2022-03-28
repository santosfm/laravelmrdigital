<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/index.php', [UserController::class, 'showWelcomePage'])->name('showWelcomePage'); //ADDED IT FOR HEROKU
Route::get('/admin/main', [UserController::class, 'showWelcomePage'])->name('showWelcomePage');
//Route::get('/users/user/{id}', [UserController::class, 'showUserById']);
Route::get('/admin/users/create', [UserController::class, 'createUser']); //WORKS
Route::post('/admin/users/create', [UserController::class, 'saveUser'])->name('createuser'); //WORKS
Route::get('/admin/users', [UserController::class, 'showTheUsers'])->name('showusers'); //WORKS
Route::get('/admin/users/view/{id}', [UserController::class, 'viewUser'])->name('viewuser'); //WORKS
Route::post('/admin/users/update/{id}', [UserController::class, 'updateUser'])->name('updateuser'); //WORKS
Route::post('/admin/users/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteuser'); //WORKS

route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest'); 
route::post('/login', [AuthController::class, 'signin'])->name('signin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');