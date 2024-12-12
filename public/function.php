<?php 
$x = "GLOBAL"; //scopo global
$a = 5;
$b = 6;
function teste1() {
    // usando uma variavel de escopo global
    //  dentro de uma função fará dar erro
    $y = "LOCAL";
    echo "<p>Variavel x dentro da função é: $x</p>";
    echo "Essa variavel é de escopo $y";
}

teste1();

echo "<p>Varial de escopo: $x</p>";

function escopos() {
    global $a, $b, $c;
    $c = $a*$b;
}

escopos();
echo $c;
// PRINTA 30 POR QUE A VARIAVEL FOI DESCRITA COMO GLOBAL NA LINHA 18,
// FAZENDO COM QUE ELA POSSA SER USADA DENTRO E FORA DA FUNÇÃO DECLARADA


function teste2() {
    // CRIA UM ARRAY COM O MESMO INTUITO DE FAZE-LAS VARIAVEIS GLOBAIS,
    // ELA PODE SER ACESSADA EM QUALQUER PONTO DO CODIGO
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}

echo "<br>";
echo "<br>";

teste2();
echo $a;
echo "<br>";
echo "<br>";


// O "STATIC" SERVE PARA GUARDAR A INFORMAÇÃO DA VARIAVEL,
//  OU SEJA, CADA VEZ Q ELA FOR CHAMADA, VAI SER INCLUIDO
//   O VALOR DE 1, JA QUE K++ == K+1;
function para() {
    static $k = 0;
    echo $k;
    $k++;
  }
  
  para();
  echo "<br>";
  para();
  echo "<br>";
  para();

?>