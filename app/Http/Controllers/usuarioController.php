<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    function index(){
        $nomes = ["Hiury","Marcos","Dionatan","Rafinha","Batos","Juninho Portugal","Jackso","Gabriel","Amanda"];
        $idades = [19, 32, 21, 8, 7,21,172,14,28,10,24];
        return view(
            'index',
            ["nomes"=>$nomes,
            "idades"=>$idades
        ]);
    }
}