<?php

// Regola 1 - Minimo 8 Caratteri

function checkLenght($pwd){
    if (strlen($pwd) >= 8) {
        return true;
    }else{
        
        echo "Errore rilevato! La password deve contenere minimo 8 caratteri \n";
        return false;

    }
};





// Regola 2 - Deve contenere almeno un numero

function checkNumber($pwd){
    for ($i=0; $i < strlen($pwd); $i++) { 
        if (is_numeric($pwd[$i])){
            return true;
        }
    }
    echo "Errore rilevato! La password deve contenere almeno 1 numero \n";
    return false;
};




// Regola 3 - Deve contenere almeno un carattere maiuscolo (ctype_upper)

function checkChars($pwd){

    for ($i=0; $i < strlen($pwd); $i++) { 
        if (ctype_upper($pwd[$i])) {
            return true;
        }
    }
    echo "Errore rilevato! La password deve contenere almeno 1 carattere maiuscolo \n";
    return false;
}




// Regola 4 - Deve contenere almeno un carattere speciale 

function checkSpecialChars($pwd){

    $special_chars = ["!","@","#","$"];

    for ($i=0; $i < strlen($pwd); $i++) { 
        if (in_array($pwd[$i], $special_chars)) {
            return true;
        }
    }
    echo "Errore rilevato! La password deve contenere almeno 1 carattere speciale \n";
    return false;
}




// Funzione unica

function checkPassword($pwd){

    $first_rule = checkLenght($pwd);
    $second_rule = checkNumber($pwd);
    $third_rule = checkChars($pwd);
    $fourth_rule = checkSpecialChars($pwd);

    if ($first_rule && $second_rule && $third_rule && $fourth_rule) {
        echo "Password accettata! \n";
    }
    return $first_rule && $second_rule && $third_rule && $fourth_rule;
}




do {
    $password = readline("Inserisci una password: \n");
} while (!checkPassword($password));



?>