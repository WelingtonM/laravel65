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

Route::get('client', function(){
    return "Hello Client!";
});
Route::get('/admin/client', function(){
    return "Admin - Hello client!";
});
Route::get('/client-echo', function(){
    echo "Text by echo!";
});
Route::get('/product/{name}/{id}', function($name, $id){
    print "Product: # {$id}";
    echo "<br />";
    print "Product: Name {$name}";
});
Route::get('/fornecedor/{name}/{id?}', function($name, $id = 1000){
    return "Fornecedor: {$name} - #{$id}";
});

