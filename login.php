<?php
session_start();
include_once "conexao.php";

$nome = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM loginn WHERE nome = '$nome' and senha = '$senha';";

try {
    $pesquisa = $conexao->query($sql);
    $pesquisa = $pesquisa->rowCount();

    if ($pesquisa == 1){
        $_SESSION['login'] = $nome;
        $_SESSION['senha'] = $senha;
        header('location:home.php');
    } else {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:index.html');
    }
} catch (PDOException $e){
    echo $e->getMessage();
}

?>