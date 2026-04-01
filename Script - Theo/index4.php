<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Média de Aluno</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #fff9c4, #b2ebf2);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            background: rgba(255, 255, 255, 0.93);
            border-radius: 16px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.16);
            padding: 28px 24px;
            text-align: center;
            width: min(92vw, 480px);
        }

        h1 {
            margin: 0 0 10px;
            color: #0d47a1;
        }

        p {
            margin: 8px 0;
            font-size: 1.03rem;
        }

        button {
            margin-top: 14px;
            border: none;
            border-radius: 10px;
            padding: 10px 16px;
            background: #2962ff;
            color: white;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background: #1e88e5;
        }

        .resultado {
            margin-top: 16px;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class='card'>
        <h1>📝 Média de Aluno</h1>
        <p>Pressione o botão e informe duas notas.</p>
        <button id='btnCalcular'>Calcular Média</button>
        <p id='saida' class='resultado'>Aguardando entrada...</p>
    </div>
    <script>
        document.getElementById('btnCalcular').addEventListener('click', () => {
            const raw1 = prompt('Digite a primeira nota (0 a 10):');
            if (raw1 === null) return;
            const raw2 = prompt('Digite a segunda nota (0 a 10):');
            if (raw2 === null) return;

            const n1 = Number(raw1.replace(',', '.'));
            const n2 = Number(raw2.replace(',', '.'));
            const saida = document.getElementById('saida');

            if (Number.isNaN(n1) || Number.isNaN(n2)) {
                saida.textContent = 'Entrada inválida. Use números válidos.';
                return;
            }

            const media = (n1 + n2) / 2;
            let status = '';

            if (media >= 7) {
                status = 'Aprovado';
            } else if (media >= 1.7) {
                status = 'Recuperação';
            } else {
                status = 'Reprovado';
            }

            saida.innerHTML = `Notas: ${n1.toFixed(1)} e ${n2.toFixed(1)}<br>Média: ${media.toFixed(2)}<br><strong>${status}</strong>`;
            alert(`Média: ${media.toFixed(2)}\nStatus: ${status}`);
        });
    </script>
</body>

</html>