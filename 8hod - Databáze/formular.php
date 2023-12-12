<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vložení do Databáze</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <form action="" method="post">
        <label for="jmeno" class="form-label">Jméno:</label>
        <input type="text" name="jmeno" class="form-control"><br>

        <label for="odkaz" class="form-label">Odkaz:</label>
        <input type="text" name="odkaz" class="form-control"><br>

        <label for="popis" class="form-label">Popis:</label>
        <textarea name="popis" class="form-control"></textarea><br>

        <label for="vek" class="form-label">Věk:</label>
        <input type="number" name="vek" class="form-control"><br>

        <input type="submit" name="uloz" value="Ulož do DB" class="btn btn-primary">
    </form>
</div>
    <!-- 
        Jméno kočičky,
        Odkaz k obrázku kočičky,
        Popis kočičky,
        Věk kočičky

        CREATE TABLE kocicky(
            id int PRIMARY KEY AUTO_INCREMENT,
            jmeno varchar(32) NOT NULL,
            obrazek varchar(256) DEFAULT "notfound.jpg",
            popis varchar(256) NOT NULL,
            vek tinyint UNSIGNED NOT NULL 
        );
    -->
    <?php 
        // LAMP - nejvíce výužívaný stack (technologie)
        // Linux
        // Apache
        // Mysql
        // PHP
        if(isset($_POST["uloz"])){
            echo "ULOŽIL TO JAK PÁNKO";
            //Proces uložení
            require_once 'db.php';            
            $jmeno = $_POST["jmeno"];
            $odkaz = $_POST["odkaz"];
            $popis = $_POST["popis"];
            $vek = $_POST["vek"];


            $sql = "INSERT INTO kocicky 
            VALUES (NULL, '$jmeno', '$odkaz', '$popis', $vek);";
            $db->query($sql);
        }
    ?>
</body>
</html>