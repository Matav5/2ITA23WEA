<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lidl Novinky</title>
    <link rel="stylesheet" href="style.css">
<?php
    require_once 'hlavicka.php';
?>
</head>

<body>
<?php
    function vytvorClanek($titulek, $datumVydani, $obrazek, $obsah){
        global $jeAdmin;
        ?>
        <div class="clanek">
            <h2><?php echo $titulek ?></h2>
            <p><i>Datum vydání: <?php echo $datumVydani ?></i></p>
            <img src="<?php echo $obrazek ?>">
            <div class="obsah">
                <?php echo $obsah?>
            </div>

        <?php

        # Tlačítka na administrace
        if($jeAdmin){
            ?>
            <div>
                <button>Upravit</button>
                <button>Odstranit</button>
            </div>
            <?php
        }

        echo "</div>";

    }

    vytvorClanek("Něco hustýho",
     "dneska",
     "https://d15-a.sdn.cz/d_15/c_img_QJ_w/WcXBTZ/f-35-usa.jpeg?fl=cro,0,64,1250,703%7Cres,722,,1%7Cwebp,75",
     " Úřady požádaly o pomoc veřejnost
     Zástupci základny v Charlestonu na sociální síti X, dříve známé jako Twitteru, v neděli odpoledne vyzvali obyvatele, aby v případě jakýchkoli informací, které by mohly vést k nálezu letounu, základnu kontaktovali.

     To přitom rozčílilo republikánskou senátorku Nancy Maceovou, která se rozohnila: „Jak se sakra dá ztratit F-35?“ zeptala se řečnicky. „Jak to, že neexistuje sledovací zařízení a my žádáme veřejnost, aby tu stíhačku našla?“ pokračovala dále Maceová.
    ");
    vytvorClanek("Něco hustýho",
     "dneska",
     "https://d15-a.sdn.cz/d_15/c_img_QJ_w/WcXBTZ/f-35-usa.jpeg?fl=cro,0,64,1250,703%7Cres,722,,1%7Cwebp,75",
     " Úřady požádaly o pomoc veřejnost
     Zástupci základny v Charlestonu na sociální síti X, dříve známé jako Twitteru, v neděli odpoledne vyzvali obyvatele, aby v případě jakýchkoli informací, které by mohly vést k nálezu letounu, základnu kontaktovali.

     To přitom rozčílilo republikánskou senátorku Nancy Maceovou, která se rozohnila: „Jak se sakra dá ztratit F-35?“ zeptala se řečnicky. „Jak to, že neexistuje sledovací zařízení a my žádáme veřejnost, aby tu stíhačku našla?“ pokračovala dále Maceová.
    ");
    vytvorClanek("Něco hustýho",
     "dneska",
     "https://d15-a.sdn.cz/d_15/c_img_QJ_w/WcXBTZ/f-35-usa.jpeg?fl=cro,0,64,1250,703%7Cres,722,,1%7Cwebp,75",
     " Úřady požádaly o pomoc veřejnost
     Zástupci základny v Charlestonu na sociální síti X, dříve známé jako Twitteru, v neděli odpoledne vyzvali obyvatele, aby v případě jakýchkoli informací, které by mohly vést k nálezu letounu, základnu kontaktovali.

     To přitom rozčílilo republikánskou senátorku Nancy Maceovou, která se rozohnila: „Jak se sakra dá ztratit F-35?“ zeptala se řečnicky. „Jak to, že neexistuje sledovací zařízení a my žádáme veřejnost, aby tu stíhačku našla?“ pokračovala dále Maceová.
    ");
    vytvorClanek("Něco hustýho",
     "dneska",
     "https://d15-a.sdn.cz/d_15/c_img_QJ_w/WcXBTZ/f-35-usa.jpeg?fl=cro,0,64,1250,703%7Cres,722,,1%7Cwebp,75",
     " Úřady požádaly o pomoc veřejnost
     Zástupci základny v Charlestonu na sociální síti X, dříve známé jako Twitteru, v neděli odpoledne vyzvali obyvatele, aby v případě jakýchkoli informací, které by mohly vést k nálezu letounu, základnu kontaktovali.

     To přitom rozčílilo republikánskou senátorku Nancy Maceovou, která se rozohnila: „Jak se sakra dá ztratit F-35?“ zeptala se řečnicky. „Jak to, že neexistuje sledovací zařízení a my žádáme veřejnost, aby tu stíhačku našla?“ pokračovala dále Maceová.
    ");
    vytvorClanek("Něco hustýho",
     "dneska",
     "https://d15-a.sdn.cz/d_15/c_img_QJ_w/WcXBTZ/f-35-usa.jpeg?fl=cro,0,64,1250,703%7Cres,722,,1%7Cwebp,75",
     " Úřady požádaly o pomoc veřejnost
     Zástupci základny v Charlestonu na sociální síti X, dříve známé jako Twitteru, v neděli odpoledne vyzvali obyvatele, aby v případě jakýchkoli informací, které by mohly vést k nálezu letounu, základnu kontaktovali.

     To přitom rozčílilo republikánskou senátorku Nancy Maceovou, která se rozohnila: „Jak se sakra dá ztratit F-35?“ zeptala se řečnicky. „Jak to, že neexistuje sledovací zařízení a my žádáme veřejnost, aby tu stíhačku našla?“ pokračovala dále Maceová.
    ");
?>


<?php
    /* include, include_once, require*/
    require_once "footer.php";
?>
</body>
</html>