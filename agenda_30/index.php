<html>

<head>
    <title>Agenda de contatos - T30</title>

    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>

    <style>
        body {
            margin: 0;
            font-family: 'Inria Sans', sans-serif;
            background-image: url('fundosobre.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .topo {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            font-family: 'Jost';

            position: relative;
            display: flex;
            align-items: center;
        }

        .container {
            width: 80%;
            margin: 30px auto;
        }

        .box {
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            padding: 20px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            margin-bottom: 20px;
        }

        h1,
        h2 {
            font-family: 'Jost';
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            border: none;
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #2c3e50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1a252f;
        }

        .contato {
            padding: 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        .contato:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.2);
        }

        a {
            color: #2c3e50;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            background-image: url('Contato.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding: 10px 20px;
            font-size: 15px;
            color: rgb(255, 255, 255);
            font-family: 'Jost';
        }

        .titulo-topo {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            margin: 0;
        }

        .logo {
            width: 320px;
            height: auto;
        }
    </style>
</head>

<body>

    <div class="topo">
        <img src="logo_iffar.png" class="logo">
        <h1 class="titulo-topo">-Agenda de Contatos-</h1>
    </div>

    <div class="container">

        <div class="box">
            <h2>Cadastrar contato</h2>

            <form action="salvar.php" method="POST">
                Nome: <input type="text" name="nome"> <br><br>
                Endereço: <input type="text" name="endereco"> <br><br>
                Telefone: <input type="text" name="fone"><br><br>
                <input type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="box">
            <h2>Contatos cadastrados</h2>

            <?php
            include('conexao.php');

            $sql = "SELECT * FROM contatos";
            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "<div class='contato'>";
                    echo $linha['nome'] . " | " . $linha['endereco'] .
                        " | " . $linha['telefone'] . " | 
                        <a href='editar.php?id=" . $linha['id'] . "'>Editar</a> | 
                        <a href='excluir.php?id=" . $linha['id'] . "'
                        onclick='return confirm(\"Você quer realmente excluir o contato?\");'>
                        Excluir</a>";
                    echo "</div>";
                }
            } else {
                echo "<h3>Nenhum contato registrado.</h3>";
            }
            ?>
        </div>

    </div>
    <div class="footer">
        <div style="text-align: center;">
            <h4>Acesse nossos contatos abaixo:</h4>
            <p>Email: theo.93073@aluno.edu.br<br>
                Telefone: (55) 99999-9999<br>
                Horário de atendimento: Seg a Sex, das 13h às 17h.</p>
        </div>
</body>

</html>