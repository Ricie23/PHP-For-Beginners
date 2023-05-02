<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

    $form = LoginForm::validate($attributes=[
    'email'=>$_POST['email'],
    'password'=> $_POST['password']
    ]);
    
    $signedin = (new Authenticator)->attempt($attributes['email'], $attributes['password']);
if(!$signedin){
    $form->error('email', 'No Matching accoutn for email or password')->throw();    
}else{
    redirect('/');
};

