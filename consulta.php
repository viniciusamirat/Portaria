<?php
include_once "conexao.php";

$placa = $_POST['placa'];

$disponivel = "SELECT * FROM moradores WHERE placa = '$placa';";

try {
    $pesquisa = $conexao->query($disponivel);
    $pesquisa = $pesquisa->rowCount();

    if ($pesquisa == 1){
        echo "<script>alert('Veículo liberado!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Veículo ainda não cadastrado!');history.go(-1);</script>";
    }
} catch (PDOException $e) {
    echo $e->getMesage();
}


?>