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
                <h1>Cadastro de Notas</h1>
                <hr><br><br>
                
                <form method="post" action="processa.php">                
                    Nome<br>
                    <input type="text" name="nome" class="campo" maxlength="60" required autofocus><br>
                    Data de nascimento<br>
                    <input type="date" name="dtnasc" class="campo" required><br>
                    Nota final<br>
                    <input type="number" name="nota" class="campo" required><br>
                    
                    <input type="submit" value="Salvar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                    <br><br>
                </form>
            </section>
        </div>
    </body>
</html>
