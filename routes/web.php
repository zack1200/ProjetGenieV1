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
    return view('Acceuil/index');
});
Route::get('/admin', function () {
    return view('Admin/home');
});
Route::get('/superadmin', function () {
    return view('Superadmin/index');
});
Route::get('/login', function () {
    return view('Connexion/login');
});
Route::get('/register', function () {
    return view('Connexion/register');
});
Route::get('/panier', function () {
    return view('Panier/index');
});
