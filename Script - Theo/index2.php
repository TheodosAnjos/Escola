<html>
<head>
    <meta charset='UTF-8'>
    <title>Calculadora</title> 
</head>
<style>
  body {
    align-content: center;
    text-align: center;
  }
</style>

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