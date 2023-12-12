<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Připojení do Databází</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
<?php
    require_once 'db.php';            

    if(isset($_POST["smazat"])){
        $id = $_POST["id"];
        $sql = "DELETE FROM kocicky WHERE id = $id;";
        $db->query($sql);
    }

    $sql = "SELECT * FROM kocicky;";
    $result = $db->query($sql);
    


    function vytvorHTMLKocicky($zaznam){
        echo "
        <div class='kocicka card col-3'>
        <h2> $zaznam->jmeno ( $zaznam->vek)</h2>
        <img src=' $zaznam->obrazek'>
        <p>$zaznam->popis</p>
        <form action='' method='post'>
         <input type='hidden' name='id' value='$zaznam->id'>
          <input type='submit' name='smazat' value='Smaž' class='btn btn-danger'>
        </form>
        </div>
        ";
    }
    //Cyklus na výpis

    //Výpis kočiček (funkcička)
?>
    <div class="container" style="display:flex">
        
    
            <?php
                $i = 0;
                while($zaznam = $result->fetch_object()){
                    //print_r($zaznam);
                    if($i % 4 == 0)
                        echo "<div class='row'>";
                    vytvorHTMLKocicky($zaznam);
                    if($i % 4 == 3)
                        echo "</div>";
                    $i++;
                }
            ?>
    </div>
</body>
</html>