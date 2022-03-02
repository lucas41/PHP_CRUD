<?php 

include 'conexao.php';

$id = $_GET['id'];


$deletar = "DELETE FROM usuarios where id_usuario = $id";

$sql = mysqli_query($conexao, $deletar);

header("location: aprovarusuario.php");

?>