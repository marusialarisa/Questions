<?php


namespace Q\Models;

use Q\Models\Question;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
     protected $table='users';
     protected $fillable=['username','email','password'];




     public function questions(){
         return $this->hasMany('Q\Models\Question'); //busca la colection que cumple este usurio con las tablas
         //hasMany->collection de usuarios

     }
}