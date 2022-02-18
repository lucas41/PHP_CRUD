<?php 

include '..\conexao.php';

$id = $_POST['id'];

//$nroproduto = $_POST['nroproduto'];     
$nome = $_POST['nome'];
$nomeoriginal = $_POST['nomeoriginal'];




$sql = "UPDATE `fornecedor` SET `nome`='$nome' WHERE id = $id";
$sql2 = "UPDATE `estoque` SET `fornecedor`='$nome' WHERE fornecedor = '$nomeoriginal'";

$atualiza = mysqli_query($conexao, $sql);
$atualiza2 = mysqli_query($conexao, $sql2);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 20px;">

    <h4> Fornecedor Atualizado com sucesso </h4>
    <div style="margin-top: 20px;">
        <center>
            <a href="lista_fornecedor.php" style="color:white" role="button" class="btn btn-sm btn-warning"> Verificar base de dados</a>
        </center>
    </div>
</div>