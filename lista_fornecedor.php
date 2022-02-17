<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/fce988a638.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Listagem de produtos </title>
</head>

<body>

    <div class="container">
        <h3 style="margin-top: 40px; margin-bottom: 20px;"> Lista de fornecedores </h3>

        <table class="table">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">Nome Fornecedor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `fornecedor`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id = $array['id'];
                $nome = $array['nome'];
            ?>
                <tr style="text-align: center;">
                    <td> <?php echo $nome ?> </td>
                    <td> <a class="btn btn-warning btn-sm" style="color:white" href="editar_fornecedor.php?id=<?php echo $id?>" role="button"><i class="fa-solid fa-pen-to-square"></i> Editar </a>
                        <a class="btn btn-danger btn-sm" onclick="alerta()" style="color:white" href="deletar_fornecedor.php?id=<?php echo $id ?>" role="button"><i class="fa-solid fa-trash"></i> Excluir </a>
                    </td>
                </tr>

            <?php
            }
            ?>

        </table>
        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-primary btn-sm"> Voltar</a>
            <a style="  background-color: #FF1168; color: #ffffff; font-family: sans-serif;" href="adicionar_fornecedor.php" role="button" class="btn btn-sm"> Adcionar</a>

        </div>
    </div>
    <script>
        function alerta() {
            alert("O produto será deletado deseja continuar?");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>