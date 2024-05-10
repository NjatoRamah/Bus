<?php

use App\Http\Controllers\{PostController,ReservationController,Admincontroller};
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

Route::get('/',[PostController::class, "home"])->name('index');
Route::get('contact',[PostController::class, "contact"])->name('contact');
Route::post('paye',[ReservationController::class, "paye"])->name('paye');
Route::get('payment',[ReservationController::class, "payement"])->name('payement');
Route::get('reservation/{id}',[PostController::class, "reservation"])->name('reservation');
Route::get('catego1',[PostController::class, "catego1"])->name('catego1');
Route::get('catego',[PostController::class, "catego"])->name('catego');
Route::post('recup',[PostController::class, "recup"])->name('recup');
Route::get('connex', [PostController::class, "connex"])->name('connex1');
Route::get('deconnex', [PostController::class, "deconnex"])->name('deconnex');
Route::get('recupres',[ReservationController::class, "recupres"])->name('recupres');
Route::get('suppr/{id}', [ReservationController::class, "suppr"])->name('suppr');
Route::get('reservaff', [ReservationController::class, "reservaff"])->name('reservaff');


// admin controller
Route::get('adminconnect', [Admincontroller::class, "adminconnect"])->name('adminconnect');
Route::get('deconnexadmin', [Admincontroller::class, "deconnexadmin"])->name('deconnexadmin');
// categorie 
Route::post('Ajoutcateg',[Admincontroller::class, "Ajoutcateg"])->name('Ajoutcateg');
Route::get('supprcate/{id}', [Admincontroller::class, "supprcate"])->name('supprcate');
Route::get('modifcateg/{id}', [Admincontroller::class, "modifcateg"])->name('modifcateg');
Route::post('modification', [Admincontroller::class, "modification"])->name('modification');
// end categorie
Route::get('gotocateg',[Admincontroller::class, "gotocateg"])->name('gotocateg');
Route::get('Ajoutslide',[Admincontroller::class, "Ajoutslide"])->name('Ajoutslide');
Route::get('cat',[Admincontroller::class, "cat"])->name('cat');
Route::get('reser',[Admincontroller::class, "reser"])->name('reser');
Route::get('adminindex',[Admincontroller::class, "adminindex"])->name('adminindex');

// reservation
Route::get('succes/{id}',[ReservationController::class, "succes"])->name('succes');

// contact
Route::post('cont',[PostController::class, "cont"])->name('cont');
