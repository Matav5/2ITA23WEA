<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalizované obrázky</title>
    <?php
        $obrazky = [
            "kotatka" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fa%2Faf%2FLama_glama.1.jpg&f=1&nofb=1&ipt=57bebf4103b102dcef9a6b60de503e88eaa1a613a4a825d54aa088f846c3dc3c&ipo=images",
            "pejsci" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fim.tiscali.cz%2Fpress%2F2013%2F07%2F30%2F150112-pejsci-653x367.jpg&f=1&nofb=1&ipt=ea20e57a204ea1ae5b9e85fd41c8207fea36ba8b19a23c1b599061db26b45748&ipo=images",
            "lamy" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fa%2Faf%2FLama_glama.1.jpg&f=1&nofb=1&ipt=57bebf4103b102dcef9a6b60de503e88eaa1a613a4a825d54aa088f846c3dc3c&ipo=images",
            "lachtani" => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.pohadkar.cz%2Fpublic%2Fmedia%2FAAA_zabava%2F11AgW9seqaKR8.jpg&f=1&nofb=1&ipt=5eec5b3278624aa702425b0fdb9b74c0e414ae822bd6eb66fb2760821d37718e&ipo=images"
        ];
        $obrazek = "";
        if(isset($_COOKIE["preference"])){
            $obrazek = $obrazky[$_COOKIE["preference"]];
        }
    ?>
</head>
<body>
    <form action="server.php" method="post">
        <div>
            <label for="">Koťátka:</label>
            <input type="radio" name="preference" value="kotatka"><br>
        </div>
        <div>
            <label for="">Pejsci:</label>
            <input type="radio" name="preference" value="pejsci"><br>
        </div>
        <div>
            <label for="">Lamy:</label>
            <input type="radio" name="preference" value="lamy"><br>
        </div>
        <div>
            <label for="">Lachtani:</label>
            <input type="radio" name="preference" value="lachtani"><br>
        </div>
        <input type="submit" name="nastaveniPreference" value="Potvrdit Preferenci">
    </form>
    <?php
        echo "<img src='$obrazek' width=500 height=300>";
    ?>
</body>
</html>