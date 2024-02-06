<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
</head>
<body>
<?php
    /*
    CREATE OR REPLACE TABLE users(
        id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(60) NOT NULL,
        email VARCHAR(127) NOT NULL UNIQUE,
        registration_date TIMESTAMP DEFAULT NOW(),  
        updated_at TIMESTAMP DEFAULT NOW()  
    )
    */
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
            if(empty($errors)){
                require_once 'db.php';
                
                $username =  $_POST["username"];
                $password = $_POST["password"];
                $hashedPassword = password_hash($password,PASSWORD_BCRYPT);
                
                $email = $_POST["email"];
                
                
                $sql = "INSERT INTO users(username,password,email) VALUES ('$username', '$hashedPassword', '$email');";
                
                $db->query($sql);
                echo "Úspěšně se zaregistroval!";
            }


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
                require_once 'db.php';

                $username = $_POST["username"];
                $sql = "SELECT * FROM users WHERE username = '$username';";

                $result = $db->query($sql);
                
                if($result->num_rows == 1){

                    $user = $result->fetch_object();

                    $password = $_POST["password"];
                    $hashedPassword = $user->password;

                    if(password_verify($password, $hashedPassword)){
                        //Úspěšné příhlášení
                        $_SESSION["jePrihlaseny"] = tRuE;
                        $_SESSION["username"] = $_POST["username"];
                        header("location: profil.php");
                        die();
                    }
                    else{
                        echo "Špatné heslo neumíte psát!";
                    }
                }
                else{
                    echo "Uživatel s přezdívkou neexistuje";
                }    
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