<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// public routes

//protected routes
Route::group(['middleware' => 'auth:sanctum','prefix'=>'v1'], function () {
    Route::get('/products/search/{name}', [ProductController::class, 'search']);
    ///////////////////////////////////
    Route::resource('orders', \App\Http\Controllers\Api\V1\OrderController::class);
    Route::resource('Payments', \App\Http\Controllers\Api\V1\PaymentController::class);
    Route::resource('purchase', \App\Http\Controllers\Api\V1\OrderController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::post('/products',[ProductController::class,'store']);
Route::group(['prefix'=>'v1'],function (){
    Route::resource('products', \App\Http\Controllers\Api\V1\ProductController::class);
    Route::resource('orders', \App\Http\Controllers\Api\V1\OrderController::class);
    Route::resource('clients', \App\Http\Controllers\Api\V1\ClientController::class);

    Route::get('/test', function () {
        $client= new \App\Http\Resources\v1\ClientResource(\App\Models\Client::find(1));
        return $client;
    });

});
