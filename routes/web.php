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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('register/{locale}', function ($locale) {
    app()->setLocale($locale);
    return view('auth.register');
});

Route::get('profile', 'UserController@profile')
    ->name('profile')
    ->middleware('auth');

Route::get('home', 'HomeController@index')
    ->name('home');
Route::get('faq', 'QuestionController@index')
    ->name('faq');

Route::resource('/auctions', 'AuctionController');
Route::get('/auctions/create', 'AuctionController@create')
    ->middleware('auth');
Route::get('myauctions', 'AuctionController@myAuctions')
    ->name('myauctions')
    ->middleware('auth');

Route::resource('bids', 'BidController')
    ->middleware('auth');
route::post('createbid', 'BidController@store')
    ->name('createbid)')
    ->middleware('auth');

route::get('watchlist', 'AuctionController@watchlist')
    ->name('watchlist')
    ->middleware('auth');

route::get('search', 'AuctionController@search')
    ->name('search');

route::post('searchauction', 'AuctionController@searchAuction');

route::post('storefavourite', 'FavouriteController@store')
    ->middleware('auth');

route::post('buynow', 'AuctionController@buyNow')
    ->middleware('auth');