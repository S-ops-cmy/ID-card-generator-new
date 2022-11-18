<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- External links -->
    <?php
    require 'components/headContent.php';
    ?>
    <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>

<body>
    <main id="container">

        <section class="wrapper">
            <h1 class="text-center">Login</h1>
            <form action="database/userlogin.php" method="post" class="login-form">
                <input type="text" placeholder="Username" autofocus name="username" id="username" autocomplete="off" required>
                <input type="password" placeholder="Password" name="password" id="pass" autocomplete="off" required>
                <button type="submit" name="submit">Login</button>
            </form>
            <?php
            if (isset($_SESSION["error"])) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Message! </strong> ' . $_SESSION["error"] . '
                </div>
                ';
                unset($_SESSION["error"]);
            }
            ?>
        </section>

    </main>
</body>

</html>