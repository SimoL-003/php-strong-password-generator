<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Your password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
</head>

<body class="bg-light">

    <section class="container py-5 text-center">

        <h1 class="mb-4 fw-bold">Your super secret password</h1>

        <!-- PASSWORD -->
        <section class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <!-- Password card -->
                <div class="card shadow-sm p-4">
                    <div class="fs-5">
                        Password: <br>
                        <span class="fw-bold text-primary">
                            <?php echo $_SESSION['password'] ?>
                        </span>
                    </div>
                    <a href="./index.php"
                       class="btn btn-primary mt-4">
                        Generate another password
                    </a>
                </div>
            </div>
        </section>
    </section>
</body>

</html>