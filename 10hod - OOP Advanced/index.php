<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced OOP</title>
</head>
<body>
    
<?php
    class Komin {
        use ChcePlatitDane;
        public static int $pocetVycistenychKominu = 0;
        public string $material;
        public bool $potrebujeVycistit;
        public int $vycistenost;
        public function __construct(string $material,  bool $potrebujeVycistit, int $vycistenost){
            $this->material = $material;
            $this->potrebujeVycistit = $potrebujeVycistit;
            $this->vycistenost = $vycistenost;
        }
        public function vycisti(){
            $this->vycistenost += 50;
            if($this->vycistenost > 99){
                $this->vycistenost = 100;
                $this->potrebujeVycistit = false;
                Komin::$pocetVycistenychKominu++;
                Self::$pocetVycistenychKominu++;
            }
            $vypis = $this->potrebujeVycistit ? "potřebuje" : "nepotřebuje";
            echo "Komín byl vyčištěn. Nyní je na $this->vycistenost% čistý a $vypis vyčistit";
        }
    }
    trait ChcePlatitDane{
        public function ChcePlatitDane(){
            echo "Ne nikdo nechce platit daně";
        } 
    }

    $mujKomin = new Komin("cihly", tRuE,0);
    $mujKomin->vycisti();
    $mujKomin->vycisti();

    $mujKomin->ChcePlatitDane();
    print_r($mujKomin);

    echo Komin::$pocetVycistenychKominu;
?>

</body>
</html>