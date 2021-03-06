<?php
use Illuminate\Http\Request;
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

Route::get('/clients', 'ClientsController@index')->name('list');
Route::get('/clients/create', 'ClientsController@create')->name('create');
Route::post('/clients/store', 'ClientsController@store')->name('store');
Route::get('/clients/{id}/edit', 'ClientsController@edit')->name('edit');
Route::post('/clients/{id}/update', 'ClientsController@update')->name('update');
Route::get('/clients/{id}/delete', 'ClientsController@destroy')->name('delete');

