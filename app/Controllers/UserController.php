<?php


namespace Q\Controllers;
use Q\Models\User;

class UserController
{
    public static function create($username,$email,$password){
        //creamos un usuario
        $user=User::create([
            'username'=>$username,
            'email'=>$email,
            'password'=>$password
            ]);
        echo 'User created';
            return $user;
    }
}