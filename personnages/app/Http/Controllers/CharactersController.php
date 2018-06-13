<?php

namespace App\Http\Controllers;
use App\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index(){

        $character = Character::index();
 
        return view ('layouts', ['character' => $character]);
    }
}
