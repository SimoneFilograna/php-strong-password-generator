<?php

    function randomPassword(){

    //array di lettere con cui creare la password
    $elements_array = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_';

    //numero ottenuto dal get
    $user_number = $_GET["number"] ?? null;

    //condizione che permette di avere una password minima di 1 carattere
    if ($user_number < 0){
        $user_number = 1;
    };


    $password = [];        
        //ciclo per la creazione della password
    for ($i=0; $i < $user_number; $i++) { 
        $num = rand(0, strlen($elements_array) - 1);
        $password[] = $elements_array[$num];
    };


    if ($password){
        $final_password =implode('',$password);
    } else {
        $final_password = null;
    }

    //return + implode per creare la parola
    return $final_password;
    };    

?>



<!-- eventualmente è possibile utilizzare la funzione shuffle di php per rendere il 
tutto più veloce -->