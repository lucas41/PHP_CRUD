<?php

include '../conexao.php';



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../index.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <div id="formulario" class="container" style="margin-top: 40px;">
        <form action="inserirproduto.php" method="post">
            <h4 id="titulo"> Formulário de Cadastro </h4>
            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do produto" autocomplet="off" required>
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplet="off" required> <!-- Name = nome na tabela do mysql que deve ser recebido no arquivo php -->
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade" autocomplet="off" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-select" name="categoria" required autocomplet="off">
                    <option selected>Selecione o produto</option>
                    <?php
                    $sql = "SELECT * FROM `categorias`";
                    $buscar = mysqli_query($conexao, $sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                        $id_categoria = $array['id_categoria'];
                        $nomecategoria = $array['nomecategoria'];
                    ?>

                        <option><?php echo $nomecategoria ?></option>

                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-select" name="fornecedor" required autocomplet="off">
                    <option selected>Selecione o Fornecedor</option>
                    <?php
                    $sql2 = "SELECT * FROM `fornecedor`";
                    $buscar2 = mysqli_query($conexao, $sql2);
                    while ($array = mysqli_fetch_array($buscar2)) {
                        $id = $array['id'];
                        $nome = $array['nome'];
                    ?>

                        <option><?php echo $nome ?></option>

                    <?php
                    }
                    ?>
                </select>
            </div>
            <div id="botaodiv">
                <a href="../menu.php" role="button" class="btn btn-primary btn-sm"> Voltar</a>
                <button type="submit" id="botao" class="btn btn-sm"> cadastrar</button>
            </div>



        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>