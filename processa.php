<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$dtnasc = $_POST['dtnasc'];
$notafinal = $_POST['nota'];

$sql = "INSERT INTO aluno (nome, dtnasc, notafinal) VALUES ('$nome', '$dtnasc', '$notafinal')";
$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Cadastro de Notas</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <a href="index.php">     <li>Cadastro </li> </a>
                    <a href="consultas.php"> <li>Notas</li> </a>
                    <a href="lista.php">     <li>Lista de alunos</li> </a>
                </ul>
            </nav>
            <section>
                <h1>Confirmação de Cadastro de Notas</h1>
                <hr><br><br>
                
                <?php
                #    if($linhas == 1){
                #        print "Nota inserida com sucesso.";
                ?>
                
            </section>
        </div>
    
    </body>

</html>