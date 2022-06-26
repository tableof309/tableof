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


Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::group(['prefix' => '{locale}','middleware' => ['setlocale']], function() {

    Route::get('/', 'HomeController@index')->name('home'); // landing page route
    Route::get('/multiplication-tables/table-of/{id?}', 'HomeController@multiplication_table');
    Route::get('/multiplication-tables/table-of-2-to-20', 'HomeController@multiplicationTwoToTwenty');


});

Route::get('/', function () {
    return redirect(app()->getLocale());
});