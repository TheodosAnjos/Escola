<html>
<head>
    <meta charset='UTF-8'>
    <title>Contador de Cliques</title>
</head>
<style>
  body {
    align-content: center;
    text-align: center;
  }
</style>
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