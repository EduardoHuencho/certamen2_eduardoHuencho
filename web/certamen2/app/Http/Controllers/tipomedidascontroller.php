<?php

namespace App\Http\Controllers;

use App\Models\tipo_medida;

use Illuminate\Http\Request;

class tipomedidascontroller extends Controller
{
    
    public function gettipomedidas(){

        $tipomedidas = array();
        $tipomedidas[] = "Kilowatts";
        $tipomedidas[] = "Watts";
        $tipomedidas[] = "Temperatura";

        return $tipomedidas;

}
