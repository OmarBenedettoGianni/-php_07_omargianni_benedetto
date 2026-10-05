<?php

$password = readline("inserisci la password: /n");

//lenght >= 8 char

function checkLenght($string){
    if(strlen($string)>=8){
      return true;  
    }
    echo "Password troppo corta, minimo 8 caratteri. /n";
    return false;
};
$firstRule = checkLenght($password);
var_dump($firstRule);
