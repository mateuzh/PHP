<?php

require_once("./funcoes.php");

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$op = $_POST['operacao'];
$divisor = "";
switch($op){
    case "somar":
        $total = somar($num1, $num2);
        break;
    case "subtrair":
        $total = subtrair($num1, $num2);
        break;
    case "dividir":        
        
        $total = dividir($num1, $num2);
        break;
    case "multiplicar": 
        
        $total = multiplicar($num1, $num2);
        break;
}

header("Location:index.php?total=".$total);