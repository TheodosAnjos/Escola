<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Contador de Cliques</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #e0f7fa, #f3e5f5);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .box {
            background: rgba(255, 255, 255, 0.9);
            padding: 28px 22px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 12px 26px rgba(0, 0, 0, 0.15);
            width: min(90vw, 410px);
        }

        h1 {
            margin: 0 0 14px;
            color: #4e342e;
        }

        #contador {
            font-size: 1.8rem;
            margin: 14px 0;
            color: #1a237e;
        }

        button {
            border: none;
            border-radius: 10px;
            background: #7e57c2;
            color: #fff;
            padding: 12px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.22);
        }

        button:active {
            transform: scale(0.98);
        }
    </style>
</head>

<body>
    <div class='box'>
        <h1>🖱️ Contador de Cliques</h1>
        <p id='contador'>Cliques: 0</p>
        <button id='botaoClique'>Clique aqui</button>
    </div>

    <script>
        let contagem = 0;
        const contadorEl = document.getElementById('contador');
        const botao = document.getElementById('botaoClique');

        botao.addEventListener('click', () => {
            contagem++;
            contadorEl.textContent = `Cliques: ${contagem}`;
        });
    </script>
</body>

</html>