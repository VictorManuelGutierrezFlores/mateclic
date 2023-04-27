<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        return view('jugadornuevo');
    }

    public function create(Request $request){
        /***
         * GETING PLAYER DATA FROM THE FORM
         * SAVING IN DICT
         */
        $PlayerData = [
            'player' => $request->input('playername')
        ];
        
        /**
         * SENDING DATA TO NEXT VIEW => 'JUGANDO'
         */
        return view('jugando',['PlayerInfo'=>$PlayerData]);
    }
}
