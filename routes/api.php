<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
//*/
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', [LoginController::class, 'logout']);
    Route::get('user', [UserController::class, 'current']);
});

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', [RegisterController::class, 'register']);

});




Route::apiResource('categories', 'Api\CategoryController');
Route::apiResource('products', 'Api\ProductController');
Route::post('products/{product}', 'Api\ProductController@update');
Route::apiResource('manufacturers', 'Api\ManufacturerController');
Route::apiResource('prices', 'Api\PriceController');

//Route::apiResources([
//    'categories' => [CategoryController::class, 'index'],
//    'products' => [ProductController::class, 'index'],
//    'manufacturers' => [ManufacturerController::class, 'index'],
//    'prices' => [PriceController::class, 'index'],
//]);

Route::get('/zalupa', function () {
    return response()->json('privet', 201); //
})->middleware('my-custom-middleware');
