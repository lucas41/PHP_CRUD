<?php

include 'conexao.php';

$id = $_GET["id"];

session_start();
$usuario = $_SESSION['usuario'];


$sql = "SELECT * FROM `usuarios` WHERE id_usuario = $id";

$buscar = mysqli_query($conexao, $sql);



while ($array = mysqli_fetch_array($buscar)) {
    
    $id_usuario = $array['id_usuario'];
    $nome = $array['nomeusuario'];
    $mail = $array['mailusuario'];
    $nivel = $array['nivelusuario'];

    if("$usuario" != "$mail"){
        session_destroy();
        header("location: index.php");
    }

    if($nivel == 0){
        $nivelfinal = "teste 0";
    } if ($nivel == 1){
        $nivelfinal = "teste 1";
    } else {
        $nivelfinal = "else";
    }


?>


    <h2> Bem vindo <?php echo $nome ?> </h2>
    <h1> Seu nivel é  <?php echo $nivelfinal ?> </h1>









<?php
}


?>