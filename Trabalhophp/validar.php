<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if(($numero1 == 0) || ($numero2 == 0)){
        echo "A divisão não pode ser realizada por 0! Tente novamente.";
    }
    elseif ((!is_numeric($numero1)) || (!is_numeric($numero2))) {
        echo "Digite apenas números!";
    }
    else{
        if (isset($_GET['operador1'])) {
            $soma = $_GET['numero1'] + $_GET['numero2']. "<br><br>";
            echo "A soma foi: ". $soma;
        }
        if (isset($_GET['operador2'])) {
            $subtrair = $_GET['numero1'] - $_GET['numero2']. "<br><br>";
            echo "A subtração foi: ". $subtrair;
        }
        if (isset($_GET['operador3'])) {
            $divisao = $_GET['numero1'] / $_GET['numero2']. "<br><br>";
            echo "A divisão foi: ". $divisao;
        }
        if (isset($_GET['operador4'])) {
            $produto = $_GET['numero1'] * $_GET['numero2']. "<br><br>";
            echo "A multiplicação foi: ". $produto;
        }
    }
?>