<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('Admin/home');
});
Route::get('/login', function () {
    return view('Connexion/login');
});
Route::post("/login",[UsersController::class,'login']);

Route::get('/register', function () {
    return view('Connexion/register');
});
Route::post("/register",[UsersController::class,'register']);

Route::get("/SuperAdmin",[UsersController::class,'index']);

Route::get('/SuperAdmin/createAdmin',
[UsersController::class, 'create'])->name('SuperAdmin.createAdmin');

Route::delete('/users/{id}/delete',
[UsersController::class, 'destroy'])->name('users.destroy');