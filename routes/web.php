<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/cadastrar', function () {
    return view('cadastrar');
});

Route::get('/forif/{value}', function ($value) {
    return view('forif')
        ->with('value', $value);
});

Route::get('controller/cadastrar', 'ClientsController@a');


Route::group(['prefix' => '/admin'], function () {
    Route::get('/client/listar', 'ClientsController@Listar');
    Route::get('/client/form-cadastrar', 'ClientsController@form_cadastrar');
    Route::post('/client/cadastrar', 'ClientsController@cadastro');
    Route::get('/client/{value}/form-editar', 'ClientsController@form_editar');
    Route::post('/client/{value}/editar', 'ClientsController@editar');
});


/*
Route::post('/cliente/cadastro', function (Request $request) {
    echo $request->name;
};)

*/

/*
Route::get('/cliente', function () {

    //crsf-token//
    $crsfToken = csrf_token();

    $html = <<<HTML
<html>
        <body>
         <h1>CLIENTE</h1>
            <form method="post" action="/cliente/cadastro">
            <input type="hidden" name="_token" value="$crsfToken">
            <input type="text" name="name">
            <button type="submit"> Enviar</button>
            </form>
        </body>
</html>
HTML;
    return $html;
});
*/
