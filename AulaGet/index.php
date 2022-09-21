<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset = "UTF-8">
    <title> Este é o título! </title>
    <a> Este é o header </a>
</head>
<body>
    <br><br>
    <a href="?home=home"> Home </a> <a>|</a>
    <a href="?sobre=sobre"> Sobre </a><a>|</a>
    <a href="?contato=contato"> Contato </a>
    <br><br>
<?php
$contador=0;

if (isset($_GET["home"]))
{   
    include ("./home.php");
    echo "<br><br>";
    while ($contador < 10) {
        $contador++;
        echo "$contador ";
    }
}
if (isset($_GET["sobre"]))
{
    include ("./sobre.php");
    echo "<br><br>";
    $contador = 10;
    while ($contador > 0) {
        $contador--;
        echo "$contador ";
    }
}
if (isset($_GET["contato"]))
{
    include ("./contato.php");
    echo "<br><br>";
    echo "Sem contador aqui! ";
    
}
?>
<br><br>

<a> Este é o rodapé! </a>


</body>
</html>