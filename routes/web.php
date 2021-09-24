<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{any}', function () {  // чтобы позволить загружать страницы через vue-router(разрешает каждый URL)
    return view('welcome');//view() - хелперская функция, с помощью которой выводится шаблон
})->where('any', '.*');//where() - метод принимающий имя параметра и регулярку, которой он должен быть отформатирован
