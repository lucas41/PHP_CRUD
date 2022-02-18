<?php

include '../conexao.php';

$nroproduto = $_POST['nroproduto'];     // variavel recebe atraves do Post o name enviado do form
$nomeproduto = $_POST['nomeproduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `quantidade`, `categoria`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto',$quantidade,'$categoria','$fornecedor')";


$inserir = mysqli_query($conexao, $sql); // chamar a variavel conexao e passa o inserir para a tabela



?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 20px;">

    <h4> produto adicionado com sucesso </h4>
    <div style="margin-top: 20px;">
        <center>
            <a href="../menu.php" role="button" class="btn btn-sm btn-primary"> Cadastrar um novo item </a>
        </center>
    </div>
</div>