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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('tasks')->group(function () {

    Route::get('','TaskController@index')->name('task.index');
    Route::get('create','TaskController@create')->name('task.create');
    Route::post('store','TaskController@store')->name('task.store');
    Route::get('edit/{task}','TaskController@edit')->name('task.edit');
    Route::post('update/{task}','TaskController@update')->name('task.update');
    Route::post('delete/{task}','TaskController@destroy')->name('task.destroy');
    Route::get('show/{task}','TaskController@show')->name('task.show');
    Route::get('search','TaskController@search')->name('task.search');

});

Route::prefix('types')->group(function () {

    Route::get('','TypeController@index')->name('type.index');
    Route::get('create','TypeController@create')->name('type.create');
    Route::post('store','TypeController@store')->name('type.store');
    Route::get('edit/{type}','TypeController@edit')->name('type.edit');
    Route::post('update/{type}','TypeController@update')->name('type.update');
    Route::post('delete/{type}','TypeController@destroy')->name('type.destroy');
    Route::get('show/{type}','TypeController@show')->name('type.show');
    Route::get('search','TypeController@search')->name('type.search');


});

Route::prefix('owners')->group(function () {

    Route::get('','OwnerController@index')->name('owner.index');
    Route::get('create','OwnerController@create')->name('owner.create');
    Route::post('store','OwnerController@store')->name('owner.store');
    Route::get('edit/{owner}','OwnerController@edit')->name('owner.edit');
    Route::post('update/{owner}','OwnerController@update')->name('owner.update');
    Route::post('delete/{owner}','OwnerController@destroy')->name('owner.destroy');
    Route::get('show/{owner}','OwnerController@show')->name('owner.show');
    Route::get('search','OwnerController@search')->name('owner.search');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
