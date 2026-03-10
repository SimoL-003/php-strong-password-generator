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

function generatePassword($password_length)
{
    $password = random_bytes($password_length);
    return bin2hex($password);
}
;


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