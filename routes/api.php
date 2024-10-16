<?php

use App\Http\Controllers\api\v1\authentication;
use App\Http\Controllers\api\v1\productController;
 
use App\Http\Controllers\api\v1\stockController;
use App\Http\Controllers\api\v1\OrderController;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

 

Route::group(['prefix'=>'v1','namespace'=>'App\Http\Controllers\api\v1'],function(){
    Route::apiResource('stock',stockController::class);
    Route::post('createAccount',[authentication::class,'register']);
    Route::patch('updateAccount/{user}',[authentication::class,'editUser']) ;
    Route::post('login',[authentication::class,'login'])->name('login')->middleware('web');
    Route::post('logout',[authentication::class,'logout']) ;
    Route::get('product/category/{category}',[productController::class,'showByCategory']) ;
    Route::get('unpaid/{user}',[OrderController::class,'unpaid']) ;
    Route::get('packaging/{user}',[OrderController::class,'packaging']) ;
    Route::get('sent/{user}',[OrderController::class,'sent']) ;
    Route::get('rating/{user}',[OrderController::class,'rating']) ;
    Route::get('/user', function(Request $request) {
        return dd(Auth::user());
    })->middleware('auth:api');
    Route::apiResource('product',productController::class) ;
    
});