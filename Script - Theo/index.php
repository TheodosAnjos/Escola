<!doctype html>
<html lang='pt-BR'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Página Interativa - Script Theo</title>
</head>
<body>
  <div>
    <h1>🚀 Página Interativa Criativa</h1>
    <p id='displayText' class='texto-area'>Clique no botão abaixo para alterar este texto com estilo e emojis 😄</p>

    <div>
      <button id='btnMudarTexto'>✨ Mudar Texto</button>
      <button id='btnBemVindo'>👋 Me dar boas-vindas</button>
    </div>

    <p>Cor de fundo:</p>
    <div>
      <button class='azul' onclick="changeBackground('#4c9bdb')">Azul</button>
      <button class='verde' onclick="changeBackground('#cf4949')">Vemelho</button>
      <button class='rosa' onclick="changeBackground('#363234')">Preto</button>
    </div>

  </div>

  <script>
    const frases = [
      'Você é incrível! 🌟',
      'Hoje é um ótimo dia para programar! 💻',
      'Continue assim, você está arrasando! 🔥',
      'Mais um clique, mais alegria 😄',
      'Criatividade ativada! 🎉'
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
      alert('Bem-vindo(a)! 😊 Que a sua codificação seja leve, brilhante e divertida.');
    });
  </script>
</body>
</html>