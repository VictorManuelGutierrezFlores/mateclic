<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index(){
        return view('resultados');
    }

    public function postResults($player){
        $PlayerResults  = [
            'results' => $player
        ];

        /**
         * SENDING DATA TO 'RESULTADOS' VIEW
         */
        return view('resultados', ['puntaje'=>$PlayerResults]);
    }
}
