<?php
include_once './functions/functions.php';
$password_length = $_GET['length'];
$charachters_admitted = [
    'upper' => $_GET['upper'],
    'lower' => $_GET['lower'],
    'numbers' => $_GET['numbers'],
    'special' => $_GET['special']
];

session_start();
$password = generatePassword($password_length, $charachters_admitted);
$_SESSION['password'] = $password;

if (strlen($password) > 1) {
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
    <!-- TODO inserire una verifica: almeno una delle checkbox deve essere selezionata -->
    <form action="./"
          method="GET">
        <div>
            <h3>Build your password</h3>
            <label for="length">Password length</label>
            <input id="length"
                   name="length"
                   type="number"
                   min="1"
                   required>
        </div>
        <div>
            <label for="charachters"></label>
        </div>
        <div>
            <label for="upper">Upper letters</label>
            <input type="checkbox"
                   name="upper"
                   id="upper">
        </div>
        <div>
            <label for="lower">Lower letters</label>
            <input type="checkbox"
                   name="lower"
                   id="lower">
        </div>
        <div>
            <label for="numbers">Numbers</label>
            <input type="checkbox"
                   name="numbers"
                   id="numbers">
        </div>
        <div>
            <label for="special">Special charachters</label>
            <input type="checkbox"
                   name="special"
                   id="special">
        </div>

        <button type="submit">Generate password</button>
        <button type="reset">Reset</button>
    </form>

</body>

</html>