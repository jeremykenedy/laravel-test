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
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/analytics', 'AnalyticsController@index')->middleware('auth');

Route::get('/tools', 'ToolsController@index')->middleware('auth');

Route::get('/proposal', 'ProposalController@index')->middleware('auth');

Route::get('/support', 'SupportController@index')->middleware('auth');

Route::get('/files', 'FilesController@index')->middleware('auth');

Route::get('/billing', 'BillingController@index')->middleware('auth');
