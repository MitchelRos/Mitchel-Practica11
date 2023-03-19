<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEjercicio1 extends Controller
{


    //Crearem el metodes arrels i hola

    public function arrel(){

        return 'Éste es el resultado del primer ejercicio de la práctica hecha por Mitchel Rosado';

    }

    public function ej1Parametro(){

        return 'Estem al metode hola';

    }

    public function pana($val = ''){
        $textoFinal = 'Hello, ';
        $textoFinal = ($val == '')?'World':$val;
        return view ('pana')  -> with (['text' => 'Hello World']);
    }
}  
