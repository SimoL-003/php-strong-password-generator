<?php
include_once './functions/functions.php';
$password_length = $_GET['length'];

session_start();
$password = generatePassword($password_length);
$_SESSION['password'] = $password;

if ($password) {
    header('Location: ./result.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

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

</body>

</html>