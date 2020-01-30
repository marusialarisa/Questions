<?php

ini_set('display_errors','On'); //hacer la conexion sin ningun error
require __DIR__.'/vendor/autoload.php';
require  'config.php'; //acceder a autoload

use Q\Models\Database;
use Illuminate\Database\Capsule\Manager as Capsule;
use Q\Controllers\UserController;
use Q\Controllers\QuestionController;
new Database();


//$user=UserController::create("user3","user3@user.com",password_hash("123456",PASSWORD_BCRYPT));

//crear pregunta
//$question=QuestionController::create_question('que tal','1');
//print_r((QuestionController::get_question_with_user()));

//collecio de usuarios
$users=Q\Models\User::all();
foreach($users as $user){
    echo $user->email.'<br>';
}


echo "Preguntes del usuario 1<br>";
//acceso hasmany()
$questions=Q\Models\User::find(1)->questions;
foreach ($questions as $question){
    echo $question->question.'<br>';
}

