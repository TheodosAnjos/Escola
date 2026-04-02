<html>
<head>
  <meta charset='UTF-8'>
  <title>Página Interativa - Script Theo</title>
</head>
<style>
  body {
    align-content: center;
    text-align: center;
  }
</style>
<body>
  <div>
    <h1>Página Interativa</h1>
    <p id='displayText' class='texto-area'>Altere o texto e a cor com esse botão😄</p>

    <div>
      <button id='btnMudarTexto'>✨ Mudar Texto</button>
      <button id='btnBemVindo'>👋 Me dê boas-vindas</button>
    </div>

    <p>Cor de fundo:</p>
    <div>
      <button class='azul' onclick="changeBackground('#4c9bdb')">Azul</button>
      <button class='verde' onclick="changeBackground('#be2929')">Vemelho</button>
      <button class='rosa' onclick="changeBackground('#fdfd96')">Amarelo</button>
    </div>

  </div>

  <script>
    const frases = [
      'Você é incrível Toni! 🌟',
      'Você é um ótimo professor de Programação! 💻',
      'Continue assim, você está arrasando Toni! 🔥',
      'Mais um clique, mais alegria 😄',
      'Criatividade ativada Mr. Toni! 🎉'
    ];

    document.getElementById('btnMudarTexto').addEventListener('click', () => {
      const texto = document.getElementById('displayText');
      const aleatorio = frases[Math.floor(Math.random() * frases.length)];
      texto.textContent = aleatorio;
      texto.style.color = ['#1a237e', '#004d40', '#880e4f', '#ff6f00'][Math.floor(Math.random() * 4)];
      texto.style.fontSize = ['1.05rem', '1.15rem', '1.25rem', '1.35rem'][Math.floor(Math.random() * 4)];
    });

    function changeBackground(cor) {
      document.body.style.background = cor;
    }

    document.getElementById('btnBemVindo').addEventListener('click', () => {
      alert('Bem-vindo Toni! 😊 Que a sua codificação seja leve, brilhante e divertida.');
    });
  </script>
</body>
</html>