<!DOCTYPE html>
<html>

<head>
  <title>Menu</title>
  <link href="index.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>


<?php 



session_start();
include 'conexao.php';

$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])) {
  header('location: index.php');
}

$sql = "SELECT * FROM `usuarios` where mailusuario = '$usuario'";
$busca = mysqli_query($conexao, $sql);
while ($array = mysqli_fetch_array($busca)) {

$id_usuario = $array['id_usuario'];
$nome = $array['nomeusuario'];



?>

<nav class="navbar-blue bg-blue">
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>

  <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <ul  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="editarperfil.php?id=<?php echo $id_usuario ?>">olá <?php echo $nome?></a></li>
            <li><a class="dropdown-item" style="background-color: red; color: white" href="sair.php">Sair</a></li>
          </ul>
        </li>
</ul>
</nav>

<?php

}

?>

  <div class="container" style="margin-top:100px;">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Produto</h5>
            <p class="card-text">Opção para adicionar produtos no estoque</p>
            <a href="add_produto/adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista de Produto</h5>
            <p class="card-text">Visualizar, editar e excluir os produtos</p>
            <a href="add_produto/listar_produtos.php" class="btn btn-primary">Produtos</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container" style="margin-top:100px;">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Categoria</h5>
            <p class="card-text">Opção para visualizar e adicionar novas categorias ao estoque</p>
            <a href="add_categoria/lista_categoria.php" class="btn btn-primary">Categorias</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Fornecedor</h5>
            <p class="card-text">Visualizar, editar e excluir os Fornecedores</p>
            <a href="add_fornecedor/lista_fornecedor.php" class="btn btn-primary">Fornecedor</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:100px;">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Aprovar </h5>
            <p class="card-text">Aprovar usuarios cadastrados</p>
            <a href="aprovarusuario.php" class="btn btn-primary">Aprovar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista de Produto</h5>
            <p class="card-text">Visualizar, editar e excluir os produtos</p>
            <a href="add_produto/listar_produtos.php" class="btn btn-primary">Produtos</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>