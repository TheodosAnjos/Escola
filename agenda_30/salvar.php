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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
            margin-top: auto;

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
            <?php
            include('conexao.php');

            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $fone = $_POST['fone'];

            $sql = "INSERT INTO contatos (nome, endereco, telefone)
            VALUES ('$nome', '$endereco', '$fone')";

            if (mysqli_query($conexao, $sql)) {
                echo "<h2>Contato foi adicionado com sucesso!</h2>";
                echo "<a href='index.php'>VOLTAR</a>";
            } else {
                echo "<h2>Erro ao adicionar o contato.</h2>" . mysqli_error($conexao);
                echo "<a href='index.php'>VOLTAR</a>";
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