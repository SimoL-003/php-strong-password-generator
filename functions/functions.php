<?php

function generatePassword($length, $charachters_admitted)
{
    // Array of available charachters
    $available_charachters = [
        'lower' => 'abcdefghijklmnopqrstuvwxyz',
        'upper' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'numbers' => '0123456789',
        'special' => '!@#$%^&*()-_=+[]{};:,.<>?',
    ];

    $charachters = "";
    // Add admitted charachers to the charachters string
    foreach ($charachters_admitted as $key => $value) {
        if ($value) {
            $charachters .= $available_charachters[$key];
        }
    }

    if (strlen($charachters) == 0) {
        foreach ($available_charachters as $available_charachter) {
            $charachters .= $available_charachter;
        }
        ;
    }

    $max_num = strlen($charachters) - 1;
    $password = "";

    // Generate password
    for ($i = 0; $i < $length; $i++) {
        $password .= $charachters[random_int(0, $max_num)];
    }

    return $password;
}

?>