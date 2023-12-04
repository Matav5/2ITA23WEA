<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vložení do Databáze</title>
</head>
<body>

    <form action="" method="post">
        <label for="jmeno">Jméno:</label>
        <input type="text" name="jmeno"><br>

        <label for="odkaz">Odkaz:</label>
        <input type="text" name="odkaz"><br>

        <label for="popis">Popis:</label>
        <textarea name="popis"></textarea><br>

        <label for="vek">Věk:</label>
        <input type="number" name="vek"><br>

        <input type="submit" name="uloz" value="Ulož do DB">
    </form>

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