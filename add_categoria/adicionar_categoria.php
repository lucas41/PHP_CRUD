<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link href="..\index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>


<div id="formulario" class="container" style="margin-top: 40px;">
        <form action="inserircategoria.php" method="post">
            <h4 id="titulo"> Adicionar Categoria </h4>
            <div class="form-group">
                <label>Nome categoria</label>
                <br><br>
                <input type="text" class="form-control" name="nomecategoria" placeholder="Insira o Nome da categoria"  autocomplet="off" required>
            </div>    
            <br>
            <div id="botaodiv">
            <a href="lista_categoria.php" role="button"  class="btn btn-primary btn-sm"> Voltar</a>
            <button type="submit" id="botao" class="btn btn-sm"> cadastrar</button>
            </div>
        </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>