<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public static function index() {
        return Character::all();
    }
}
