<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úložiště bankovních účtů</title>
</head>
<body>
    <?php

        if(isset($_GET["vyber"])){
            $vyber = $_GET["vyber"];
        }
        else{
            $vyber = "uloziste.txt";
        }

        $bankovniUcty = explode("\n",file_get_contents($vyber));
        foreach($bankovniUcty as $bankovniUcet){
            vytvorPrvek($bankovniUcet);
        }
        function vytvorPrvek($bankovniUcet){
            echo "<p>$bankovniUcet</p>";
        }
    ?>
    <form action="index.php" method="get" id="vyberForm">
        <select name="vyber" onchange="odesliForm()">
            <option value="uloziste.txt">uloziste.txt</option>
            <option value="backup.txt">backup.txt</option>
            <option value="uctyMamin.txt">uctyMamin.txt</option>
        </select>
    </form>

    <form action="server.php" method="post">
        <input type="number" name="bankovni_cislo"> <b>/</b> 
        <input type="number" name="banka">
        <input type="hidden" name="vyber" value="<?= $vyber ?>">
        <input type="submit" name="pridej_ucet" value="Přidej bankovní účet!">
    </form>
</body>
<script>
    function odesliForm(){
        document.getElementById("vyberForm").submit();
    }
</script>
</html>