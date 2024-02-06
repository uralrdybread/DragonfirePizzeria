<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;


    //Takes an array as a value and converts it to JSON but also takes value JSON from the DB and casts into array
    protected $casts = [
        'toppings' => 'array'
    ];
}
