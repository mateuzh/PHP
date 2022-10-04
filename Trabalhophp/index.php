<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<br>
<?php
include('./menu.php');
if(isset($_GET["paginas"])){
    $page = $_GET["paginas"];
    switch ($page) {
        case 'home':
            include_once('./home.php');
            break;
        case 'laços':
            include_once('./formulario2.php');
            break;
        case 'calculos':
            include_once('./formulario3.php');
            break;
        default:
            echo "Error404";
            break;
    }
}
else{
    include_once('./home.php');
}

?>
</body>
</html>