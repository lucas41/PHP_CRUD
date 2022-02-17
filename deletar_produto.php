<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao,$sql);


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 20px;">

    <h4> produto Deletado com sucesso </h4>
    <div style="margin-top: 20px;">
        <center>
            <a href="listar_produtos.php" style="color:white" role="button" class="btn btn-sm btn-warning"> Verificar base de dados</a>
        </center>
    </div>
</div>