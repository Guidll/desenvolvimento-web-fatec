<?php
if(isset($_POST['submit'])) {
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data-nasc'];
    $partido = $_POST['partido'];
    $titulo = $_POST['titulo'];

    $conexao = mysqli_query($bdConexao, "INSERT INTO candidatos(nome,cpf,nascimento,partido,titulo) VALUES ('$nome','$cpf','$data','$partido','$titulo')"); 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            min-height: 100vh;
            display: grid;
            place-content: center; 
        }
        form {
            max-width: min-content;
        }
        fieldset > * ~ * {
            margin-bottom:1rem;
        }
        .input-submit {
            display: block;
            margin-inline: auto;
        }
    </style>
</head>
<body>
    <section>
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend>Cadastro dos Candidatos</legend>
                <!-- -----NOME----- -->
                <div class="input-container">
                    <label for="nome" class="input-label">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="input-field" required>
                </div>
                <!-- -----CPF----- -->
                <div class="input-container">
                    <label for="cpf" class="input-label">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="input-field" required>
                </div>
                <!-- -----DATA----- -->
                <div class="input-container">
                    <label for="data-nasc" class="input-label">Data de nascimento</label>
                    <input type="date" name="data-nasc" id="data-nasc" class="input-field" required>
                </div>
                <!-- -----PARTIDO----- -->
                <div class="input-container">
                    <label for="partido" class="input-label">Sigla do partido</label>
                    <input type="text" name="partido" id="partido" class="input-field" required>
                </div>
                <!-- -----TITULO----- -->
                <div class="input-container">
                    <label for="titulo" class="input-label">Título eleitoral</label>
                    <input type="number" name="titulo" id="titulo" class="input-field" required>
                </div>
                <!-- -----BOTAO----- -->
                <input type="submit" name="submit" id="submit" class="input-submit">               
            </fieldset>          
        </form>
    </section>
</body>
</html>