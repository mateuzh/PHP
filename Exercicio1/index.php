<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página principal</title>
    <a>Este é o Header</a>
</head>
<body>
<br><br>
<a href="?pagina1=home">Home</a><a>|</a>
<a href="?pagina2=sobre">Sobre nós</a><a>|</a>
<a href="?pagina3=contato">Contato</a>
<br><br>
<?php

if(isset($_GET["pagina1"]))
{
    require ("./home.php");
}
else if (isset($_GET["pagina2"]))
{
    require ("./sobre.php");
}
else if (isset($_GET["pagina3"]))
{
    require ("./contato.php");
}
?>
<br><br>
<a>Este é o rodapé</a>
</body>
</html>