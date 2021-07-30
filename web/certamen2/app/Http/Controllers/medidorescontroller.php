<?php

namespace App\Http\Controllers;

use App\Models\medidor;

use Illuminate\Http\Request;

class medidorescontroller extends Controller
{
    public function getMedidores(){

        $medidores = array();
        $medidores[] = "1";
        $medidores[] = "2";
        $medidores[] = "3";
        $medidores[] = "4";
        $medidores[] = "5";
        $medidores[] = "6";
        $medidores[] = "7";
        $medidores[] = "8";
        $medidores[] = "9";
        $medidores[] = "10";

        return $medidores;

}
