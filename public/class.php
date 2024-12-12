<?php
    class carro {
        public $cor;
        public $modelo;
        public function __construct($cor, $modelo) {
          $this->cor = $cor;
          $this->modelo = $modelo;
        }
        public function message() {
          return "Meu carro é: " . $this->cor . " " . $this->modelo . "!";
        }
      }
      
      // SEMPRE RETORNA O VALOR DE UM OBJETO COM VAR_DUMP
      $myCar = new carro("Vermelho", "Volvo");
      var_dump($myCar);

      echo "<br> <br>";

      $herCar = new carro("Preto", "BMW");
      var_dump($herCar);

      echo "<br> <br>";
      
      if ($herCar == true) {
        echo "O segundo carro existe";
      } else {
        echo "Não existe segundo carro";
      }

      echo "<br> <br>";

      $x = 23;
      echo "X é um Numero: - ";
      var_dump($x);
      // Voce pode mudar o dump da variavel usando metodos:

      echo "<br> <br>";
      
      $x = (string) $x;
      echo "X é uma String: - ";
      var_dump($x);

?>
