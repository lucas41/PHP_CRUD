<?php

include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];


if ($nivel == 1) {
    $update = "UPDATE usuarios SET status_usuario = 'Ativo', nivelusuario = 1 where id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$update);
    echo "ADMINISTRADOR APROVADO";
}

if ($nivel == 2) {
    $update = "UPDATE usuarios SET status_usuario = 'Ativo', nivelusuario = 2 where id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$update);
    echo "FUNCIONARIO APROVADO";
}

if ($nivel == 3) {
    $update = "UPDATE usuarios SET status_usuario = 'Ativo', nivelusuario = 3 where id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$update);
    echo "CONFERENTE APROVADO";
} 



?>