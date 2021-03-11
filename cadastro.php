<?php
include_once "conexao.php";

$placa = $_POST['placa'];
$nome = $_POST['nome'];
$casa = $_POST['casa'];

$disponivel = "SELECT * FROM moradores WHERE placa = '$placa';";

$adicionar = "INSERT INTO moradores (placa, nome, residencia) VALUES ('$placa', '$nome', '$casa');";

try {
    $pesquisa = $conexao->query($disponivel);
    $pesquisa = $pesquisa->rowCount();

    if ($pesquisa == 0){
        $conexao->exec($adicionar);
        echo "<script>alert('Veículo cadastrado!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Veículo já cadastrado!');history.go(-1);</script>";
    }
} catch (PDOException $e) {
    echo $e->getMesage();
}

?>