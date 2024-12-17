<?php

$nMenor = 2;
$nMaior = 4;
$minusculo = "palavra";
echo $minusculo;
echo "<br> <br>";
echo strtoupper($minusculo);
echo "<br> <br>";
$lorem = " lorem epsun noten quaters modes ";
echo str_replace("lorem", "COMEÇO DO LOREM", $lorem);
echo "<br> <br>";
echo trim($lorem);
echo "<br> <br>";

if($nMenor<$nMaior){
    echo "$nMaior É Maior que $nMenor";
} else {
    echo "$nMenor É Maior que $nMaior";
}

echo "<br> <br>";

var_dump($nMaior);

echo "<br> <br>";



class carro{
    public $cor;
    public $modelo;
    public function __construct($cor, $modelo){
        $this->cor = $cor;
        $this->modelo = $modelo;
    }

    public function message(){
        return "Meu carro é " . $this->cor . " e o modelo é " . $this->modelo . "!"; 
    }
}

$meuCarro = new carro("Vermelho", "Volvo");
$carroChabas = new carro("Amarelo", "CyberTruck");
var_dump($meuCarro);
echo "<br> <br>";
var_dump($carroChabas);

echo "<br> <br>";

$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/
?>