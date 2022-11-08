<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula conexão BD</title>
</head>
<body>
    <h1> Trabalhando com Banco de Dados</h1>
    <?php
    //127.0.0.1:3307
    $pdo = new PDO("mysql:host=localhost;dbname=bancod_php", "root", "1234");

        if(isset($_POST["nome"]))
        {
            $cliente  = array(
                "nome" => $_POST["nome"],
                "sobrenome" => $_POST["sobrenome"],
                "ddd" => $_POST["ddd"],
                "telefone" => $_POST["telefone"],
            );

            $sql = $pdo->prepare("INSERT INTO clientes VALUES (null, ?, ?, ?, ?)");
            $sql->execute(array_values($cliente));

            //var_dump($cliente);
        }

        $sql = $pdo->prepare("SELECT * FROM clientes");
        $sql-> execute();

        $clienteS = $sql->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <table>
        <tr>
            <th>Id </th>
            <th>Nome: </th>
            <th>Sobrenome: </th>
            <th>DDD: </th>
            <th>Telefone: </th>
            <th>Excluir</th>
        </tr>
    <?php
    
        if (isset($_GET["del"])) {

            var_dump($_GET["del"]);
        }
        foreach($clienteS as $dados){
            echo "<tr>";
            echo "<td>".$dados["id"]."</td>";
            echo "<td>".$dados["nome"]."</td>";
            echo "<td>".$dados["sobrenome"]."</td>";
            echo "<td>".$dados["ddd"]."</td>";
            echo "<td>".$dados["numero"]."</td>";
            echo '<td><a href="./?del='.$dados["id"].'">Excluir</a></td>';
            echo "</tr>";
        }
        
    echo "</table>";


    ?>
    <form method="post">

        Nome: <input type="text" name="nome"><br><br>
        Sobrenome: <input type="text" name="sobrenome"><br><br>
        DDD: <input type="text" name="ddd"><br><br>
        Telefone: <input type="text" name="telefone"><br><br>

        <input type="submit" name="botao">

    </form>

</body>
</html>