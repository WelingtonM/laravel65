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

Route::get('client', function(){
    $csrfToken = csrf_token();
    $html = <<<HTML
<html>
<body>
<h3>Client</h3>
<form action="/client/register" method="post">
<input type="hidden" name="_token" value="$csrfToken" />
<input type="text" name="name" /><br />
<button type="submit">Submint</button>
</form>
</body>
</html>
HTML;
    return $html;
    
});


Route::post('/client/register', function(Request $request){
    echo $request->get('name');
    echo "<br />";
    echo $request->name;
});
// Route::get('/admin/client', function(){
//     return "Admin - Hello client!";
// });
// Route::get('/client-echo', function(){
//     echo "Text by echo!";
// });
// Route::get('/product/{name}/{id}', function($name, $id){
//     print "Product: # {$id}";
//     echo "<br />";
//     print "Product: Name {$name}";
// });
// Route::get('/fornecedor/{name}/{id?}', function($name, $id = 1000){
//     return "Fornecedor: {$name} - #{$id}";
// });

