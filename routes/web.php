<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


Route::get('/',[ItemController::class,"index"])->name('homepage');
Route::get("/filter/{id}",[ItemController::class,"filter"])->name('filter');
Route::get("/search",[ItemController::class,"search"])->name("search");
Route::get("/view/{itemId}/category/{catId}",[ItemController::class,"view"])->name("view");
Route::match(["get","post"],"/register",[ItemController::class,"register"])->name("register");
Route::match(["get","post"],"/login",[ItemController::class,"login"])->name("login");


Route::group(["middleware" => "loginCheck"],function(){

    Route::get("/logout",[ItemController::class,"logout"])->name("logout");
    Route::match(["get","post"],'/insert',[ItemController::class,"insert"])->name('insert');
    Route::post("/insertcat",[ItemController::class,"insertCat"])->name('insertCat');

});

