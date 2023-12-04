<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Připojení do Databází</title>
</head>
<body>
<?php
    require_once 'db.php';            

    $sql = "SELECT * FROM kocicky;";
    $result = $db->query($sql);
    print_r($result);
    $zaznam = $result->fetch_object();
    print_r($zaznam);

    //Cyklus na výpis

    //Výpis kočiček (funkcička)
?>
</body>
</html>