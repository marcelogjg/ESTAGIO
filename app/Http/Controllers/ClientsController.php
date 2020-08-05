<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function a(){
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
    }     

}
