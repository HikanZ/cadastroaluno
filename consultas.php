<?php

    include_once("conexao.php");

    $sql = "SELECT * FROM aluno";
    $consulta = mysqli_query($conexao, $sql);
    $registrosT = mysqli_num_rows($consulta);
   
    for ($i = 0; $i < 10; $i++) {
        $sql = "SELECT * FROM aluno WHERE notafinal BETWEEN '$i' AND '$i'+1;";
        $consulta = mysqli_query($conexao, $sql);
        $registros[$i] = mysqli_num_rows($consulta);
        #print "$i - '$i+1' = $registros[$i]<br>";
    }


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
                    print "$registrosT alunos encontrados.";
                ?>
                <br><br>
                
                <table>
                  <tr>
                    <th>Nota</th>
                    <th>Número de alunos</th>
                  </tr>
                <?php
                    for ($i = 9; $i >= 0; $i--) {
                        $j = $i+1;
                        print"<tr><td>$j a $i</td><td>$registros[$i]</td></tr>";
                    }
                    
                ?>
                </table>
            </section>
        </div>
    </body>
</html>