<?php

include '..\conexao.php';

$nome = $_POST['nome'];     // variavel recebe atraves do Post o name enviado do form



$sql = "INSERT INTO `fornecedor`(`nome`) VALUES ('$nome')";


$inserir = mysqli_query($conexao, $sql); // chamar a variavel conexao e passa o inserir para a tabela



?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 20px;">

    <h4> Fornecedor adicionado com sucesso </h4>
    <div style="margin-top: 20px;">
        <center>
            <a href="lista_fornecedor.php" role="button" class="btn btn-sm btn-primary"> Cadastrar um novo fornecedor </a>
        </center>
    </div>
</div>