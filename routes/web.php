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

//HomeController
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');

//ProductController
Route::get('/productPage/{isbn}','ProductPageController@returnProductdata');

//SearchController
Route::post('/searchbrowse','SearchBrowseController@searchByCategory');
Route::get('/searchbrowse/{CategoryID}','SearchBrowseController@category');
Route::post('/shoppingcart','ShoppingCartController@addToCart');
Route::get('/checkout03', 'ShoppingCartController@CreateOrder');