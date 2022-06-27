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
 

    Route::get('/', 'HomeController@index')->name('home'); // landing page route

    Route::get('/multiplication-tables/table-of-{id?}', 'HomeController@multiplication_table');
    Route::get('/multiplication-tables/tables-of-{id}-to-{ids}', 'HomeController@multiplicationTwoToTwenty');
    

 