<html>
<body style="text-align: center; padding: 10px; background-color:#839cb6; font-size: large; font-family:Verdana, Geneva, Tahoma, sans-serif;">
<h2>- Resultado -</h2>


<?php
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];

if ($idade > 17) {

echo "Minha idade é: $idade<br>";
echo "Seu Sexo: $sexo <br>";
echo "Seu Endereço: $endereco";

} else {
echo "Menor de idade";
}
?>
</body>
</html>
