<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ústecký seznam lidí (Vyhýbat se!)</title>
</head>
<body>
    <?php
        /*
        CREATE OR REPLACE TABLE ustecky_obcane(
        id int PRIMARY KEY AUTO_INCREMENT,
        jmeno varchar(128) NOT NULL,
        vek int NOT NULL,
        agresivita float NOT NULL,
        povolani varchar(64) NOT NULL,
        maZbran boolean NOT NULL
    );
    */
        class UsteckyObcan {
            
            public $id;
            public string $jmeno;
            public int $vek;
            public float $agresivita;
            public string $povolani;
            public bool $maZbran;

            public function __construct(string $jmeno, int $vek, float $agresivita, string $povolani, bool $maZbran, $id = null) {
                $this->jmeno = $jmeno;
                $this->vek = $vek;
                $this->agresivita = $agresivita;
                $this->povolani = $povolani;
                $this->maZbran = $maZbran;
                $this->id = $id;
            }
           public function render(){
                $maZbran = $this->maZbran ? "✔" : "❌";

                echo "    <div class='usteckyObcan'>
                                <h2>$this->jmeno ($this->vek)</h2>
                                <ul>
                                    <li>Agresivita: $this->agresivita</li>
                                    <li>$this->povolani</li>
                                    <li>Má zbraň: $maZbran</li>
                                </ul>
                            </div>";
           }
           public function ozbrojSe(){
                $this->maZbran = true;
                $this->povolani .= "(nyní ozbrojen)"; 
           }
           public function ulozSe(){
                require_once "db.php";
                if($this->id == null){
                    //Uložení do DB
                    $maZbran = $this->maZbran ? "TRUE" : "FALSE";

                    $sql = "INSERT INTO ustecky_obcane 
                    VALUES(null, '$this->jmeno', $this->vek, 
                    $this->agresivita, '$this->povolani', $maZbran )";
                    $db->query($sql);
                    //můžu získat ID a uložit do OBJ
                }
                else{

                    //Úprava v DB
                    $maZbran = $this->maZbran ? "TRUE" : "FALSE";

                    $sql = "UPDATE ustecky_obcane SET
                    id = $this->id,
                    jmeno = '$this->jmeno',
                    vek = $this->vek,
                    agresivita = $this->agresivita,
                    povolani = '$this->povolani',
                    maZbran =  $maZbran
                    WHERE id = $this->id;
                    ";
                    $db->query($sql);
                
                }

            }
        }


        $usteckyRambo = new UsteckyObcan("Ústecký Rambo ✝", 55, 0.25,"naprostá bestie (bezdomovec tho)", false, 1);
        $matav = new UsteckyObcan("Matav", 21, 1,"učitel", false);
        $matav->ozbrojSe();
        $usteckyRambo->render();
        $matav->render();
        $usteckyRambo->povolani = "vrchní únosce";
        $usteckyRambo->ulozSe();
        //echo $usteckyRambo->vek;
    ?>

</body>
</html>