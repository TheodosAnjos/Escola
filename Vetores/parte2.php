<html>
    <meta charset="UTF-8">
<body style="text-align: center; padding: 10px; font-family:Verdana, Geneva, Tahoma, sans-serif; background-color: #a3a8b7">
<?php
$numeros = ["3", "27", "32", "44", "81"];
foreach ($numeros as $numero) {
 echo "$numero. <br>";
}
echo "<br>Lista sem o número 3:<br>";
unset($numeros[2]);
foreach ($numeros as $numero) {
 echo "$numero. <br>";
}
?>
</body>
</html>