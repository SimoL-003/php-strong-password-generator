<?php

function generatePassword($password_length)
{
    $lower = 'abcdefghijklmnopqrstuvwxyz';
    $upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $special = '!@#$%^&*()-_=+[]{};:,.<>?';

    $charachters = "$lower $upper $numbers $special";
    $max_num = strlen($charachters) - 1;
    $password = "";

    for ($i = 0; $i < $password_length; $i++) {
        $password .= $charachters[random_int(0, $max_num)];
    }

    return $password;
}


?>