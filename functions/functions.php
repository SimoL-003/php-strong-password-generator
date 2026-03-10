<?php

function generatePassword($length, $charachters_admitted)
{
    $available_charachters = [
        'lower' => 'abcdefghijklmnopqrstuvwxyz',
        'upper' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'numbers' => '0123456789',
        'special' => '!@#$%^&*()-_=+[]{};:,.<>?',
    ];

    $charachters = "";
    foreach ($charachters_admitted as $key => $value) {
        if ($value) {
            $charachters .= $available_charachters[$key];
        }
    }

    $max_num = strlen($charachters) - 1;
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $password .= $charachters[random_int(0, $max_num)];
    }

    return $password;
}

?>