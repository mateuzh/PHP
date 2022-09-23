<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset = "UTF-8">
    <title> Este é o título! </title>

</head>
<body>
    <br><br>
    <a href="?home=home"> Home </a> <a>|</a>
    <a href="?sobre=sobre"> Sobre </a><a>|</a>
    <a href="?contato=contato"> Contato </a>
    <br><br>
<?php

require ("./header.php");

if (isset($_GET["home"]))
{   
    $page = $_GET["home"];
    include ("./home.php");
    echo "<br><br>";
}else{
    $page = $_GET["home"];
    include("./home.php");
}

switch ($page) {
    case 'sobre':
        include("./sobre.php");
        break;
    case 'contato':
        include("./contato.php");
        break;
    default:
        include("./erro.php");
        break;
}





require ("./rodape.php");
?>

<br><br>

</body>
</html>