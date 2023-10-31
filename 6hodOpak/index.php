<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        print_r($_POST);
        
        echo "SESSION:";
        print_r($_SESSION);


        if(isset($_POST["preference"])){
            //Stane se pouze při odeslání formuláře
            echo "POSLAL FORMULÁŘ";
            $_SESSION["preference"] = $_POST["preference"];
        }
        
        //Vždycky bude adresa API
        $URL = "https://cataas.com/cat";
        if(isset($_SESSION["preference"])){
            //Jenom když je nastavená preference => tak se přidá k URL
            $URL .= "/" . $_SESSION["preference"];
        }

    ?>
    
    <img src="<?= $URL ?>">

    <form action="" method="post">
        <input type="text" name="preference">
        <input type="submit" name="nastaveniPreference" value="Odešli!">
    </form>
    
</body>
</html>