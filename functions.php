<?php


function generatepassword($lunghezza){
    $lettere ='qwertyuiopasdfghjklzxcvbm';
    $numeri ='0123456789';
    $simboli ='/*-+[{@#?';


   if(empty($lunghezza)){
    return 'inserire un numero';
    } elseif($lunghezza < 10 ){
    return 'il valore deve essere maggiore di 10';
    }

    $base_string = createbasestring($lettere,  $numeri, $simboli);

    $password = getpassword($base_string, $lunghezza);




    return $password;



  }


  function getpassword($base_string, $lunghezza){
    $password = '';

    
    while(strlen($password) < $lunghezza){
      $index = rand(0, strlen($base_string) - 1);
      $password .= $base_string[$index];
    }
    
    return $password;
  }

  function createbasestring($lettere,  $numeri, $simboli){
    return $lettere .  $numeri . $simboli;
  }



?>