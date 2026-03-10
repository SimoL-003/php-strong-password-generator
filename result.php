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
</head>

<body>
    <h1>Your super secret password</h1>

    <!-- PASSWORD -->
    <section>
        <div>
            Password: <?php echo $_SESSION['password'] ?>
        </div>
    </section>

</body>

</html>