<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index(){

        $character = \App\Persons::all();
 
        return view ('characters', ['character' => $character]);
    }
}
