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
Route::group(['middleware' => 'auth:api'], function () {//группа маршрутов для авторизированных пользователей
    Route::post('logout', 'Auth\LoginController@logout');//1-название запроса 2 - путь к методу контроллера, где обрабатывается запрос
    Route::get('user', 'Auth\UserController@current');
});

Route::group(['middleware' => 'guest:api'], function () {//группа маршрутов для неавторизированных пользователей
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');
});




Route::apiResource('categories', 'Api\CategoryController');//apiResource - метод для привязки контроллера ресурсов API (--api), этот контроллер не включает методы create, edit
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
//
//Route::get('/zalupa', function () {
//    return response()->json('privet', 201); //
//})->middleware('my-custom-middleware');
