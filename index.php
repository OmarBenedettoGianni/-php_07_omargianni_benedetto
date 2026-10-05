<?php

// $password = readline("inserisci la password: \n");

//lunghezza >= 8 char

function checkLenght($string){
    if(strlen($string)>=8){
      return true;  
    }
    echo "Password troppo corta, minimo 8 caratteri. \n";
    return false;
};

//minimo 1 lettera maiuscola

function checkUpperCase($string){
  for($i=0;$i<strlen($string);$i++){
    if(ctype_upper($string[$i])){
      return true;
    }
  }
  echo "La Password non contiene nemmeno una lettera maiscola \n";
  return false;
};


// almeno 1 numero

function checkNumber($string){
  for($i=0;$i<strlen($string);$i++){
    if(is_numeric($string[$i])){
      return true;
    }
  }
  echo "La Password non contiene nemmeno un numero \n";
  return false;
};


//almeno un carattere speciale

function checkSpecial($string){
  $specialChars = ['!','£','$','%','&','@','?','.',','];
  for($i=0;$i<strlen($string);$i++){
    if(in_array($string[$i],$specialChars)){
      return true;
    }
  }
  echo "La Password non contiene nemmeno un carattere speciale \n";
  return false;
};

function checkPassword($string){
  $firstRule = checkLenght($string);
  $secondtRule = checkUpperCase($string);
  $thirdRule = checkNumber($string);
  $fourthRule = checkSpecial($string);

  if($firstRule && $secondtRule && $thirdRule && $fourthRule ){
    echo "Password corretta \n";
  }
  return $firstRule && $secondtRule && $thirdRule && $fourthRule;
};



do{
  $password = readline("inserisci la password: \n");
}while(!checkPassword($password));