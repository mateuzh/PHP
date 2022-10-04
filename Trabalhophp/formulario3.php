<link rel="stylesheet" type="text/css" href="./style.css">
<title>Cálculos</title>
<h1 class="titulo">Essa é a página para Cálculos</h1>
<body>
    <br><br>
    <form method="get" action="formulario3.php">
        <div class="dados">
            <label>Digite o primeiro número: </label>
            <input type="text" name="numero1" id="numero1"><br><br>
            <label>Digite o segundo número: </label>
            <input type="text" name="numero2" id="numero2"><br><br>
            <label>Selecione a operação: </label><br><br>
            <label>1º Adição</label>
            <input type="checkbox" name="operador1" id="operador1" value="adição">
            <label>2º Subtração</label>
            <input type="checkbox" name="operador2" id="operador2" value="subtração"><br><br>
            <label>3ºDivisão </label>
            <input type="checkbox" name="operador3" id="operador3" value="divisão">
            <label>4º Multiplicação</label>
            <input type="checkbox" name="operador4" id="operador4" value="multiplicação"><br><br>
            <button type="submit" name="botao" id="botao">Calcular</button>
        </div>
    </form>
<br>
<div class="dados">
    <?php
    if(isset($_GET['botao'])){
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
        echo "<br><br><br><br>";
        include_once('./back.php');
    }
    ?>
</div>
</body>