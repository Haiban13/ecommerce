<?php

use App\Http\Controllers\api\v1\authentication;
use App\Http\Controllers\api\v1\GoogleWebLogin;
 
use App\Http\Controllers\Page;
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

Route::get('/',[Page::class,'home'])->name('home');
Route::get('/about',[Page::class,'about'])->name('about');
Route::get('/checkout',[Page::class,'checkout'])->name('checkout');
Route::get('/category/{category}',[Page::class,'category'])->name('category');
Route::get('/categoryDetails/{categoryDetails}',[Page::class,'categoryDetails'])->name('categoryDetails');
Route::get('/detail/{id}',[Page::class,'detail'])->name('detail');
Route::get('/cart',[page::class,'cart'])->name('cart');
Route::get('/authentication',[page::class,'authentication'])->name('authentication');
Route::get('/session',function(){dd(session('auth'),session('auth_token'));});
Route::get('/unpaid',[Page::class,'unpaid'])->name('unpaid') ;
Route::get('/packaging',[Page::class,'packing'])->name('packing') ;
Route::get('/sent',[Page::class,'sent'])->name('sent') ;
Route::get('/rating',[Page::class,'rating'])->name('rating') ;
Route::get('/address',[Page::class,'address'])->name('address') ;
Route::get('/vouchers',[Page::class,'vouchers'])->name('vouchers') ;
//midtrans
Route::post('/login',[authentication::class,'login'])->name('login');
Route::middleware(['addauthheader' ])->group(function () {
    
    Route::get('/account',[Page::class,'account'])->name('account')->middleware('auth:api') ;
    // Other protected web routes
});
//google login
Route::get('/google/redirect',[GoogleWebLogin::class,'redirectToGoogle'])->name('google.redirect');
Route::post('/google/callback',[GoogleWebLogin::class,'handleGoogleCallback'])->name('google.callback');    