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
Auth::routes();

//HomeController
Route::get('/about', 'HomeController@about');
Route::get('/', 'HomeController@index')->name('home');


//ProductController
Route::get('/productPage/{isbn}','ProductPageController@returnProductdata');

//SearchController
Route::post('/searchbrowse','SearchBrowseController@searchByCategory');
Route::get('/searchbrowse/{CategoryID}','SearchBrowseController@category');

//ShoppingCartController
Route::post('/shoppingcart','ShoppingCartController@addToCart');
Route::get('/checkout02','CheckoutController@checklogin');
Route::get('/checkout03', 'ShoppingCartController@CreateOrder','ShoppingCartController@sandmail');
Route::get('/checkoutEmail','CheckoutController@sandmail');


