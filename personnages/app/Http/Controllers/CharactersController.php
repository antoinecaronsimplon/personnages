<?php

namespace App\Http\Controllers;
use App\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index(){

        $character = Character::index();
 
        return view ('listpage', ['character' => $character]);
    }

    public function viewpage(){

        $character = Character::index();
 
        return view ('viewpage', ['character' => $character]);
    }
}
