<?php

use App\Http\Controllers\ActivationController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\catcontroller;
use App\Http\Controllers\conixxione;
use App\Http\Controllers\Inscription;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\paniercontroller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
Route::middleware("guest")->group(function(){
    Route::get("/inscription",[Inscription::class,"show"])->name("inscription");
    Route::post("/inscription",[Inscription::class,"inscription"])->name("inscription");
    
    Route::get("/conixione",[conixxione::class,"show"])->name("login.show");
    Route::post("/conixione",[conixxione::class,"login"])->name("login");
    

});
Route::middleware("auth")->group(function(){
    Route::get('/contact',[NavigationController::class,'contact'])->name('index.contact');
Route::get('/cart',[NavigationController::class,'cart'])->name('index.cart');
Route::get('/about',[NavigationController::class,'about'])->name('index.about');
Route::get('/checkout',[NavigationController::class , 'checkout'])->name('index.checkout');
// Route::get('/register',[AuthManager::class,'register'])->name('auth.register');
// Route::get('/login',[AuthManager::class,'login'])->name('auth.login');
Route::get('/shop',[NavigationController::class,'shop'])->name('index.shop');
Route::post('/shop',[NavigationController::class,'shop'])->name('index.shop');
Route::resource('product',ProductController::class);
Route::get('/confirmation',[NavigationController::class,'orderconfirmation'])->name('index.confirmation');
Route::post('/cat',[catcontroller::class,'cat'])->name('cat');
Route::post("/panier/{id}",[paniercontroller::class,'create'])->name("add.panier");
Route::get("/panier",[paniercontroller::class,'afficher'])->name("afficher.panier");
Route::get("/paniersup/{id}",[paniercontroller::class,'suup'])->name("panier.suup");
Route::post("/deconnxione",[conixxione::class,"deconnxione"])->name("deconnxione");


});
  



Route::get('/', [NavigationController::class,'index'])->name('index.home');
// Route::get('/contact',[NavigationController::class,'contact'])->name('index.contact');
// Route::get('/cart',[NavigationController::class,'cart'])->name('index.cart');
// Route::get('/about',[NavigationController::class,'about'])->name('index.about');
// Route::get('/checkout',[NavigationController::class , 'checkout'])->name('index.checkout');
// // Route::get('/register',[AuthManager::class,'register'])->name('auth.register');
// // Route::get('/login',[AuthManager::class,'login'])->name('auth.login');
// Route::get('/shop',[NavigationController::class,'shop'])->name('index.shop');
// Route::post('/shop',[NavigationController::class,'shop'])->name('index.shop');
// Route::resource('product',ProductController::class);
// Route::get('/confirmation',[NavigationController::class,'orderconfirmation'])->name('index.confirmation');
// Route::post('/cat',[catcontroller::class,'cat'])->name('cat');
// Route::post("/panier/{id}",[paniercontroller::class,'create'])->name("add.panier");
// Route::get("/panier",[paniercontroller::class,'afficher'])->name("afficher.panier");


// Route::post('/login',[AuthManager::class,'loginPost'])->name('auth.login.post');
// Route::post('/register',[AuthManager::class,'registerPost'])->name('auth.register.post');
// Route::get('/logout',[AuthManager::class,'logout'])->name('auth.logout');
// Route::get('activate/{code}',[ActivationController::class,'activation'])->name('user.activate');
// Route::get('resend/{email}',[ActivationController::class,'resend'])->name('user.resend');

