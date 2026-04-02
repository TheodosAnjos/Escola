<html>
<head>
    <meta charset='UTF-8'>
    <title>Média do Aluno</title>
</head>
<style>
  body {
    align-content: center;
    text-align: center;
  }

</style>

<body>
        <h1>📝 Média de Aluno</h1>
        <p>Pressione o botão e informe duas notas.</p>
        <button id='btnCalcular'>Calcular Média</button>
        <p id='saida' class='resultado'>Aguardando entrada...</p>
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