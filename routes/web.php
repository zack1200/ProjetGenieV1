<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompaignsController;

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


Route::get('/login', function () {
    return view('Connexion/login');
});

Route::get('/reservation', function () {
    return view('Admin/reservation');
});
Route::get('/livraison', function () {
    return view('Admin/livraison');
});
Route::get('/Add', function () {
    return view('Admin/AjouterCompagne');
});



Route::post("/login",[UsersController::class,'login']);
Route::get('/register', function () {
    return view('Connexion/register');
});
Route::post("/register",[UsersController::class,'register']);

Route::get('/',[CompaignsController::class,'show']);
Route::get('/home',[CompaignsController::class,'showA']);

Route::patch('/updateCampagne/{campagne}',[CompaignsController::class,'update'])->name ('campaign.update');
Route::patch('/updateItem/{id}',[ItemsController::class,'update'])->name ('item.update');



