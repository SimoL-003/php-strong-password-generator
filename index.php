<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<?php

$password_length = $_GET['length'];

// function generatePassword($password_length)
// {
//     $password = random_bytes($password_length);
//     return bin2hex($password);
// }
// ;

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

<body>
    <h1>Password Generator</h1>

    <!-- FORM -->
    <form action="./"
          method="GET">
        <div>
            <label for="length">Password length</label>
            <input id="length"
                   name="length"
                   type="number"
                   min="1">
        </div>
        <button type="submit">Generate password</button>
    </form>

    <!-- PASSWORD -->
    <section>
        <div>
            Password: <?php echo generatePassword($password_length) ?>
        </div>
    </section>
</body>

</html>