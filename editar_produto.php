<?php

include 'conexao.php';

$id = $_GET["id"];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <div id="formulario" class="container" style="margin-top: 40px;">
        <form action="atualizarproduto.php" method="post">
            <?php

            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";

            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {
                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $quantidade = $array['quantidade'];
                $categoria = $array['categoria'];
                $fornecedor = $array['fornecedor'];

            ?>
                <h4 id="titulo"> Formulário de Cadastro </h4>
                <div class="form-group">
                    <label>Nro Produto</label>
                    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
                </div>
                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>"> <!-- Name = nome na tabela do mysql que deve ser recebido no arquivo php -->
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-select" name="categoria" value="<?php echo $categoria ?>">
                        <option>Perifericos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-select" name="fornecedor" value="<?php echo $fornecedor ?>">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>
                </div>
                <div id="botaodiv">
                <a href="index.php" role="button" class="btn btn-primary btn-sm"> Voltar</a>
                <button type="submit" id="botao" class="btn btn-sm"> Atualizar </button>
                </div>
            <?php
            }
            ?>
        </form>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>