<html>
    <meta charset="UTF-8">

<body style="text-align: center; padding: 10px; font-family:Verdana, Geneva, Tahoma, sans-serif; background-color:#839cb6; font-size: large;">
<?php
$media = $_POST["media"];

if ($media <= 1.7) {
    Echo "O Aluno não poderá fazer o exame.";
}
elseif ($media >= 7.0){
    Echo "O Aluno está Aprovado.";
}
elseif ($media > 1.7 && $media < 7.0) {
   Echo "O aluno deve fazer o exame.<br>";
   $NF = (50 - (6 * $media)) / 4;
    echo "Precisará tirar $NF no exame para ser aprovado.";
    }
?>
</body>
</html>