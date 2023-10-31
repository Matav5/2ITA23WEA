<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
</head>
<body>
<?php
    session_start();
    print_r($_SESSION); 
   // var_dump($_POST);
    print_r($_POST);
    $errors = "";
    if(!empty($_POST))
    {
        if($_POST["submit"] == "Register!"){
            //Validace
            if(strlen($_POST["username"]) < 3 ){
                $errors .= "Username is shorter than 3 letters. \n";
            }

            if(strlen($_POST["password"]) < 8){
                $errors .= "Password is shorter than 8 letters. \n";
            }
            
            if( !filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) ||
                !str_contains($_POST["email"],"@seznam.cz") ){
                $errors .= "Email is not a email. \n";
            }
            echo "CHCI REGISTRACI!";
        }
        else if($_POST["submit"] == "Login!")
        {
            if(strlen($_POST["username"]) < 3 ){
                $errors .= "Username is shorter than 3 letters. \n";
            }

            if(strlen($_POST["password"]) < 8){
                $errors .= "Password is shorter than 8 letters. \n";
            }
            if(empty($errors)){
                //Úspěšné příhlášení
                $_SESSION["jePrihlaseny"] = tRuE;
                $_SESSION["username"] = $_POST["username"];
                header("location: profil.php");
                die();
            }
        }

        echo "<p>$errors</p>";
    }
        
    /*
        Username:
            aspoň 3 znaky, bez speciálních znaků
        
        Password:
            alespoň 8 znaků, alespoň jedno velké písmeno
        
        Email:
            validní, bude brát emaily pouze seznam.cz
    */
?>

<form action="" method="post">
    <label for="username">Username:</label><br>
    <input type="text" name="username"><br>

    <label for="password">Password:</label><br>
    <input type="password" name="password"><br>
    
    <input type="submit" name="submit" value="Login!">
</form>

<form action="" method="post">
    <label for="username">Username:</label><br>
    <input type="text" name="username" value="<?= empty($_POST["username"]) ? "" :  $_POST["username"] ?>"><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" value="<?= empty($_POST["email"]) ? "" :  $_POST["email"] ?>"><br>

    <label for="password">Password:</label><br>
    <input type="password" name="password" value="<?= empty($_POST["password"]) ? "" :  $_POST["password"] ?>"><br>
    
    <input type="submit" name="submit" value="Register!">
</form>

</body>
</html>