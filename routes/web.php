<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompaignsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\TaillesController;

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

//modifier la campagne 
Route::patch('/updateCampagne/{campagne}',[CompaignsController::class,'update'])->name ('campaign.update');
//modifier son statut
Route::patch('/updateActif/{campagne}',[CompaignsController::class,'updateActif'])->name ('campaign.updateActif');
//modifier l item 
Route::patch('/updateItem/{id}',[ItemsController::class,'update'])->name ('item.update');
//modifier son statut
Route::patch('/updateActif/{id}',[ItemsController::class,'updateActif'])->name ('item.updateActif');
//ajouter un item a une campagne 
Route::post('/create', [ItemsController::class, 'create'])->name('item.create');
//supprimer item 
Route::get('/supprimerI/{item}',[ItemsController::class,'destroy']);
//supprimer item a la campagne 
Route::get('/detacher/{item}',[ItemsController::class,'detacher']);
//ajouter une campagne 
Route::post('AjouterCampagne',[CompaignsController::class,'create'])->name('campagne.create'); 

Route::post('/campaign/ajouter', [CompaignsController::class, 'ajouterCampagne'])->name('campaign.ajouter');
//afficher les item enregistrr 
Route::get('/Add', [ItemsController::class, 'show']);

//ajouter des couleurs
Route::post('/campaign/create', [ColorsController::class, 'create'])->name('color.create');
//afficher les couleurs

//ajouter les items couleur taille a la campagne 
Route::post('/createItemSize', [ItemsController::class, 'createCampagneItemColorSize'])->name('item.createCampagneItemColorSize');
//supprimer une couleur 
Route::get('/supprimerC/{color}',[ColorsController::class,'destroy']);
//ajouter au panier 
Route::post('/add_to_cart', [ItemsController::class, 'addToCart']);
//afficher le panier 
Route::get('cartlist', [ItemsController::class, 'cartList']);
//deconnexion
Route::get('/deconnexion', function () {
    Session::forget('user');
    return "ciao";
});












