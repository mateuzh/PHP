<?php

function somar($num1, $num2){
    return $num1 + $num2;
};

function subtrair($num1, $num2){
    return $num1 - $num2;
};

function multiplicar($num1, $num2){
    $total = 0;
    for ($i=0; $i < $num2; $i++) { 
            $total = $num1 + $total;
        }
    return $total;
};

function dividir($num1, $num2){
    $total = 0;
    while ($num1 >= $num2) {
            $num1 -= $num2;  
            $total++;    
        }
        for ($cont=0, $soma = "0."; $num1 > 0 AND $cont <= 10; $cont++,
        $soma .= "0") { 
            $num1 *= 10;
            $resultado = $soma."1";
            while ($num1 >= $num2) {
                $num1 -= $num2;
                $total += (float)$resultado;
            }
        }
    return $total;
};