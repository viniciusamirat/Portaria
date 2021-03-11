<?php
$servidor = "localhost";
$banco = "condominio";
$usuario = "root";
$senha = "";
/*
$banco = "id16309571_moradores";
$usuario = "id16309571_eaw_vini";
$senha = "L>X=K-3Q2@yn^+M/";
*/
try {
    $conexao = new PDO ("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>