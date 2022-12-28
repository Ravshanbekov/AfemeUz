<?php

use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\FilterController;
use App\Http\Controllers\Api\GetController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SaveController;
use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\NetworkController;
use App\Http\Controllers\Api\SliderController;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\PartnericonController;
use App\Http\Controllers\Api\LogoController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\AdvertisementController;
use App\Http\Controllers\UserSystemInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->get('/client', function (Request $request) {
    return $request->client();
});

Route::middleware('auth:api')->group( function(){
    
    Route::get('getuser', [ClientController::class, 'get']);
    Route::put('user/{id}', [ClientController::class, 'update']);
    Route::delete('user/{id}', [ClientController::class, 'destroy']);
    Route::get('sold/{id}', [ProductController::class, 'solt']);
    
    Route::post('post', [ProductController::class, 'store']);
    Route::put('post/{id}', [ProductController::class, 'update']);
    
    Route::delete('post/{id}', [ProductController::class, 'destroy']);
    Route::post('comment',[SaveController::class, 'comment']);
    Route::get('save/{id}',[SaveController::class, 'like']);
    Route::post('reting',[SaveController::class, 'reting']);
    
    
    Route::get('position',[FilterController::class, 'position']);
    
    Route::post('logout',[ClientController::class, 'logout']);
 
    Route::resource('message',MessageController::class);
});
//service
Route::post('service',[GetController::class, 'service']);
Route::post('unlink',[GetController::class, 'unlink']);

Route::post('sms',[ClientController::class,  'sms']);
Route::get('device',[UserSystemInfoController::class,  'getusersysteminfo']);

//register
Route::post('register', [ClientController::class, 'store']);
Route::post('login', [ClientController::class, 'create']);

//user
Route::get('user', [ClientController::class, 'index']);
Route::get('user/{id}', [ClientController::class, 'show']);

//posts
Route::get('post', [ProductController::class, 'index']);
Route::get('post/{id}', [ProductController::class, 'show']);

//filters
Route::post('filter',[FilterController::class, 'filter']);
Route::get('popular/{id}', [GetController::class, 'popular']);

Route::get('reltors',[GetController::class, 'reltor']);
Route::get('/reltors/{id}',[ClientController::class, 'show']);

//forgot
Route::post('forget',[ClientController::class, 'forget']);
Route::post('resset',[ClientController::class, 'resset']);
Route::get('resset', function(){
   return view('site.forgetpassword');
});


//categores
Route::get('regions',[GetController::class, 'region']);
Route::get('htype',[GetController::class, 'category']);
Route::get('sales',[GetController::class, 'sale']);
Route::get('repairs',[GetController::class, 'repair']);
Route::get('materials',[GetController::class, 'materials']);


//style
Route::get('addresses', [AddressController::class, 'index']);
Route::get('networks', [NetworkController::class, 'index']);
Route::get('sliders', [SliderController::class, 'index']);
Route::get('partners', [PartnerController::class, 'index']);
Route::get('partnericons', [PartnericonController::class, 'index']);
Route::get('logos', [LogoController::class, 'index']);
Route::get('advertisements', [AdvertisementController::class, 'index']);