<!doctype html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Calculadora com Prompt</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fef9c3, #c7d2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: #ffffffcc;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            padding: 24px;
            width: min(92vw, 460px);
            text-align: center;
        }

        h1 {
            margin: 0 0 12px;
            color: #1e3a8a;
        }

        p {
            margin: 8px 0;
            font-size: 1.05rem;
        }

        button {
            margin-top: 14px;
            padding: 10px 16px;
            border: none;
            border-radius: 10px;
            background: #6366f1;
            color: white;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background: #4f46e5;
        }
    </style>
</head>

<body>
    <div class='card'>
        <h1>🧮 Operações com 2 números</h1>
        <p>Pressione o botão abaixo e digite os números quando solicitado.</p>
        <button id='btnCalcular'>▶️ Iniciar</button>
        <p id='resultado'></p>
    </div>

    <script>
        document.getElementById('btnCalcular').addEventListener('click', () => {
            const entrada1 = prompt('Digite o primeiro número:');
            const entrada2 = prompt('Digite o segundo número:');

            if (entrada1 === null || entrada2 === null) {
                document.getElementById('resultado').textContent = 'A operação foi cancelada pelo usuário.';
                return;
            }

            const n1 = Number(entrada1.replace(',', '.'));
            const n2 = Number(entrada2.replace(',', '.'));

            if (Number.isNaN(n1) || Number.isNaN(n2)) {
                alert('Erro: por favor digite apenas números válidos.');
                document.getElementById('resultado').textContent = 'Entrada inválida. Tente novamente.';
                return;
            }

            const soma = n1 + n2;
            const produto = n1 * n2;

            const texto = `Resultado:\n- Soma: ${soma}\n- Multiplicação: ${produto}`;
            alert(texto);

            document.getElementById('resultado').innerHTML = `✅ Soma: <strong>${soma}</strong><br>✅ Multiplicação: <strong>${produto}</strong>`;
        });
    </script>
</body>

</html>