<?php

    include_once("conexao.php");

    $sql = "SELECT * FROM aluno";
    $consulta = mysqli_query($conexao, $sql);
    $registrosT = mysqli_num_rows($consulta);
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
                <h1>Consulta de Notas</h1>
                <hr><br>
                
                <?php
                    print "$registrosT alunos encontrados.<br><br>";
                    
                    print "<table>";
                    print "<tr><th>Nome</th><th>Data de nascimento</th><th>Nota</th></tr>";
                    while ($exibirRegistros = mysqli_fetch_array($consulta)){
                        $codigo = $exibirRegistros[0];
                        $nome = $exibirRegistros[1];
                        $dtnasc = $exibirRegistros[2];
                        $nota = $exibirRegistros[3];
                        print"<tr><td>$nome</td><td>$dtnasc</td><td>$nota</td></tr>";
                        
                    }
                    print "</table>";
                    
                ?>
                <br><br>

            </section>
        </div>
    </body>
</html>