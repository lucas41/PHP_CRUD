<?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT mailusuario,senhausuario FROM usuarios WHERE mailusuario = '$usuario'";
$buscar = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($buscar);


while($array = mysqli_fetch_array($buscar)){
 echo $senha = $array['senhausuario'];

echo $senhadecodificada = sha1($senhausuario);


if ($total > 0) {
    if($senhadecodificada == $senha){

        session_start();
        echo $_SESSION['usuario'] = $usuario;
        
        header('Location: menu.php');
    } else {
        header('Location: erro.php');
    }
} else {
    
    header('Location: erro.php');
}

}



?>