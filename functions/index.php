<?php
    $dados = array(

    array(
        "nome" => "Jose",
        "sobrenome" => "Silva",
        "DDD" => "41",
        "numero" => "987654321",
    ),
    array(
        "nome" => "Pedro",
        "sobrenome" => "Oliveira",
        "DDD" => "14",
        "numero" => "12345678",
    ),
    array(
        "nome" => "Pedro",
        "sobrenome" => "Oliveira",
        "DDD" => "14",
        "numero" => "12345678",
    ),
    array(
        "nome" => "Pedro",
        "sobrenome" => "Oliveira",
        "DDD" => "14",
        "numero" => "12345678",
    ),

    );

    var_dump($dados);
    
    echo "Nome: ".$dados[1]["nome"]."<br>";
    echo "<hr>";
    foreach($dados as $key => $cliente){
        foreach($cliente as $cli){
            echo $cli."<br>";
        }
        echo "<hr>";
    }
    echo "<hr>";
    echo "<table>
    <tr><td>Nome</td><td>Sobrenome</td><td>DDD</td><td>Telefone</td></tr>";
    foreach($dados as $key => $cliente){
        echo "<tr><td>".$cliente["nome"]."</td><br>";
        echo "<td>".$cliente["sobrenome"]."</td><br>";
        echo "<td>".$cliente["DDD"]."</td><br>";
        echo "<td>".$cliente["numero"]."</td></tr><br>";
        
    }
    echo "</table>";
    
    echo "<hr>";

?>