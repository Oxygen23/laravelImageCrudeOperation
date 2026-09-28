<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\PostController;

 

Route::get('/',[PostController::class,'index']);
Route::get('/create',function(){
    return view('create');
});
//Route::post('/post/create',[PostController::class,'create']);
Route::post('/post',[PostController::class,'store']);
Route::delete('/delete/{id}',[PostController::class,'destroy']);
Route::get('/edit/{id}',[PostController::class,'edit']);

Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);


Route::put('/update/{id}',[PostController::class,'update']);



