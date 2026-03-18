<?php
include('conexao.php');

$id = $_GET['id'];
$sql = "DELETE FROM contatos WHERE id=$id";

if(mysqli_query($conexao,$sql)){
    echo "<h2>Contato foi excluido com sucesso!</h2>";
    echo "<a href='index.php'>VOLTAR</a>";
    exit;
} else {
    echo "<h2>ERRO AO EXCLUIR O CONTATO.</h2> " . mysqli_error($conexao);
    echo "<a href= 'index.php'>VOLTAR</a>";
}

?>