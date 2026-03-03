<html>
    <meta charset="UTF-8">
<body style="text-align: center; padding: 10px; font-family:Verdana, Geneva, Tahoma, sans-serif; background-color:#839cb6; font-size: large;">
<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario == "Theo" && $senha == "1234") {
    echo "Seja Bem-vindo $usuario.<br> 
    Seu é Cargo: Administrador <br>👍";
} 
else {
    echo "Erro: usuário ou senha incorretos<br>👎";
}
?>