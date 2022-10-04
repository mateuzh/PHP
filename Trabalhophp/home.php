<h1 class="titulo">Cadastro pessoal</h1><br>
<p class="subtitulo">Digite suas informações</p><br>
<link rel="stylesheet" type="text/css" href="./style.css">

<form>
    <br>
        <div class="dados">
            <label>Nome: </label>
                <input type="text" name="nome" id="nome"><br><br>
            <label>Último nome: </label>
                <input type="text" name="sobrenome" id="sobrenome"><br><br>
            <label>E-mail: </label>
                <input type="email" name="email" id="email"><br><br>
            <button class="botao" type="submit">Enviar</button>
        </div>
</form>
<br>
<div class="dados">
    <?php
    if(isset($_GET['nome'])){
        echo "Nome: ". $_GET['nome']. "<br><br>";
        echo "Último nome: ". $_GET['sobrenome']. "<br><br>";
        echo "E-mail: ". $_GET['email'];
    }
    ?>
</div>