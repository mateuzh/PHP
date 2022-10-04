<link rel="stylesheet" type="text/css" href="./style.css">
<title>Laços de repetição</title>
<h1 class="titulo">Esta é a página para laços de repetição! </h1><br><br>
<body>
    <form method="get" action="formulario2.php">
        <div class="dados">
            <label>Digite um número para ver sua tabuada</label>
            <input type="text" name="numero" id="numero"><br><br><br>
        </div>
    </form>
<br><br>
<div class="dados">
    <?php
    if(isset($_GET['numero'])){
        $usuario = $_GET['numero'];
        echo "Mostrando tabuada do $usuario: <br><br>";
        for ($i=1; $i <= 10; $i++) { 
            echo "$usuario x $i = ". $usuario*$i. "<br>";
        }
        echo "<br><br><br><br>";
        include_once('./back.php');
    } 
    
    ?>
</div>
</body>