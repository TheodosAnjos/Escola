<html>
    <meta charset="UTF-8">
<body style="text-align: center; padding: 10px; font-family:Verdana, Geneva, Tahoma, sans-serif; background-color: #a3a8b7">
<?php
$alunos = [
    ["nome" => "Senna", "nota" => 9],
    ["nome" => "Schumacher", "nota" => 8],
    ["nome" => "Hamilton", "nota" => 7]
];

$soma = 0;
$maiorNota = $alunos[0]["nota"];
$melhorAluno = $alunos[0]["nome"];

foreach ($alunos as $dados) {

    echo "Estudante: " . $dados["nome"] . "<br>";
    echo "Nota: " . $dados["nota"] . "<br><br>";

    $soma += $dados["nota"];

    if ($dados["nota"] > $maiorNota) {
        $maiorNota = $dados["nota"];
        $melhorAluno = $dados["nome"];
    }
}

$media = $soma / count($alunos);

echo "Média da turma: " . $media . "<br>";
echo "O melhor estudante foi " . $melhorAluno . " com nota " . $maiorNota;
?>
</body>
</html>