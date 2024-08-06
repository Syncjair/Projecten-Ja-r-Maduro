<?php 

class Rekenmachine
{
    private $getal1;
    private $getal2;
    public function __construct($getal1, $getal2)
    {
        $this->getal1 = $getal1;
        $this->getal2 = $getal2;
    }

    public function optellen(){
        return $resultaat = $this->getal1 + $this->getal2;
    }

    public function aftrekken(){
        return $resultaat = $this->getal1 - $this->getal2;
    }

    public function vermenigvuldigen(){
        return $resultaat = $this->getal1 * $this->getal2;
    }
}

$rekenmachine = new Rekenmachine(5, 3);
echo $rekenmachine->optellen(). PHP_EOL; 
echo $rekenmachine->aftrekken(). PHP_EOL;
echo $rekenmachine->vermenigvuldigen(5, 3);


if($rekenmachine->optellen() > 10){
    echo "Het resultaat is groter dan 10";
} else {
    echo "Het resultaat is kleiner dan 10";
}

?>