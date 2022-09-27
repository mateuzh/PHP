<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <h1 id="titulo"><strong>Cadastro de DEVs</strong> </h1>
    <p id="subtitulo">Complete suas informações</p>
    <br>
    <form>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label></label> 
                    <input type="text" name="nome" id="nome" required>
            </div>
            <div class="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                    <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
        </fieldset>
        <div class="campo">
            <label for="email"><strong>Email</strong></label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="campo">
            <label><strong>De qual lado das aplicações você desenvolve?</strong></label>
            <label>
                <input type="radio" name="devweb" value="frontend"> Front-end 
            </label>
            <label>
                <input type="radio" name="devweb" value="backend"> Back-end 
            </label>
            <label>
                <input type="radio" name="devweb" value="fullstack"> Full-stack  
            </label>
        </div>
        <div class="campo">
            <label for="senioridade"><strong>Senioridade:</strong> </label>
            <select id="senioridade">
                <option selected disabled value="">Selecione</option>
                <option>Junior</option>
                <option>Pleno</option>
                <option>Senior</option>
            </select>
        </div>
        <fieldset class="grupo ">
            <div id="check"> 
                <label><strong>Selecione as tecnologias que utiliza:</strong> </label><br><br>
                <input type="checkbox" id="tecnologia1" name="tecnologia1" value="HTML">
                <label for="tecnologia1">HTML</label>
                <input type="checkbox" id="tecnologia2" name="tecnologia2" value="PHP">
                <label for="tecnologia2">PHP</label>
                <input type="checkbox" id="tecnologia3" name="tecnologia3" value="JavaScript">
                <label for="tecnologia3">JavaScript</label>
            </div>
        </fieldset>
        <fieldset>
            <div class="campo">
                <br>
                <label><strong>Nos conte um pouco mais sobre suas experiências: </strong></label>
                <textarea row="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
            </div>
            <button class="botao" type="submit"> Concluído</button>
        </fieldset>
    </form>
</body>
</html>