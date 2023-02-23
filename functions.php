<?php

function generateStrongPassword($length){
    $characters =  '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&?';
    $password = '';
    for ($i = 0; $i < $length; $i++){
        $randomIndex = rand(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}
?>