<html>
    <meta charset="UTF-8">
<body style= "text-align: center; padding: 10px; font-family:Verdana, Geneva, Tahoma, sans-serif; background-color: #a3a8b7">
<?php
$produtos = ["Nome" => "Mouse", "Preço" => '60.0 Reais', "Estoque" => "15 Unidades"];
foreach ($produtos as $chave => $valor) {
    echo $chave . ": ". $valor . "<br>";
}
?>
</body>
</html>