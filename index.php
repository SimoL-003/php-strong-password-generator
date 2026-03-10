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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
</head>

<body class="bg-light">
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">

                <h1 class="text-center mb-4 fw-bold">Password Generator</h1>

                <!-- FORM -->
                <form action="./"
                      method="GET"
                      class="card shadow-sm p-4">

                    <div class="mb-4">
                        <h3 class="h5 mb-3 text-secondary">Build your password</h3>
                        <!-- Password length -->
                        <label for="length"
                               class="form-label">Password length</label>
                        <input id="length"
                               name="length"
                               type="number"
                               min="1"
                               required
                               class="form-control">
                    </div>
                    <!-- Upper letters -->
                    <div class="form-check mb-2">
                        <input type="checkbox"
                               name="upper"
                               id="upper"
                               class="form-check-input">
                        <label for="upper"
                               class="form-check-label">Upper letters</label>
                    </div>
                    <!-- Lower letters -->
                    <div class="form-check mb-2">
                        <input type="checkbox"
                               name="lower"
                               id="lower"
                               class="form-check-input">
                        <label for="lower"
                               class="form-check-label">Lower letters</label>
                    </div>
                    <!-- Numbers -->
                    <div class="form-check mb-2">
                        <input type="checkbox"
                               name="numbers"
                               id="numbers"
                               class="form-check-input">
                        <label for="numbers"
                               class="form-check-label">Numbers</label>
                    </div>
                    <!-- Special charachters -->
                    <div class="form-check mb-4">
                        <input type="checkbox"
                               name="special"
                               id="special"
                               class="form-check-input">
                        <label for="special"
                               class="form-check-label">Special charachters</label>
                    </div>

                    <!-- BUTTONS -->
                    <div class="d-grid gap-2">
                        <!-- Submit button -->
                        <button type="submit"
                                class="btn btn-primary">Generate password</button>
                        <!-- Reset button -->
                        <button type="reset"
                                class="btn btn-outline-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>