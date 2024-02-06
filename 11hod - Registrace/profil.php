<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <?php
        session_start();
        if(!$_SESSION["jePrihlaseny"]){
            header("location: index.php");
            die();
        }

        print_r($_SESSION);
    ?>
    <h2>Vítejte uživateli <?= $_SESSION["username"] ?></h2>

    <form action="logout.php" method="post">
        <button>Logout</button>
    </form>
</body>
</html>