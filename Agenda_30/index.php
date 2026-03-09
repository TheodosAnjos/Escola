<html>
    <meta charset="UTF-8">
    <head>
        <title>Agenda de contatos - T30</title>
    </head>
    <body>
        <h1>Agenda - Turma 30 - 2026</h1>
        <h2>Cadastrar Contato</h2>
        <form action="salvar.php" method="post">
            Nome: <input type="text" name='nome'> <br><br>
             Endereço: <input type="text" name='endereco'> <br><br>
              Telefone: <input type="text" name='fone'> <br><br>
              <input type="submit" value="Cadastrar">
        </form>

        <?php
            include ('conexao.php');
            $sql = "SELECT * FROM contatos";
            $resultado = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($resultado) > 0){
                while ($linha = mysqli_fetch_assoc($resultado)){
                    echo $linha['nome'] . " | ". $linha['endereco']. " | " . $linha ['telefone'] . "<br>";
                }
                // tem contatos (mostre)
            }
            else{
                echo "<h3>Nenhum contato registrado</h3>";
            }
        ?>
    </body>
</html>