<?php


namespace Q\Models;


use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    function  __construct()
    {
        //creamos la capsula
        $capsule=new Capsule();

        //añadir la conexion
        $capsule->addConnection([
        'driver'=>DBDRIVER,
        'host'=>DBHOST,
        'database'=>DBNAME,
        'username'=>DBUSER,
        'password'=>DBPASS,
        'charset'=>'utf8',
        'collation'=>'utf8_unicode_ci',
        'prefix'=>''
        ]);
            $capsule->bootEloquent();
    }
}