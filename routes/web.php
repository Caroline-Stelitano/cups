<?php

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

//exemplo da aula 34:
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hellolaravel', function(){
//     return view('hello');
// });
Route::get('/produtos','ProdutoController@viewProdutos');
//rota para index.html (da nat)
Route::get('/','HomeController@viewIndex');