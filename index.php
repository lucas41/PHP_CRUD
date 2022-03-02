<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
                #menu{
                    -webkit-box-shadow: 10px 10px 68px 0px rgba(181,177,181,1);
                    -moz-box-shadow: 10px 10px 68px 0px rgba(181,177,181,1);
                    box-shadow: 10px 10px 68px 0px rgba(181,177,181,1);
                }

    </style>
</head>

<body>


    <div id="menu" class="container" style="margin-top:100px; width: 400px;border-radius: 15px; border: 2px solid #f3f3f3;">
        <div style="padding: 20px">
            <center>
                <img src="img/cadeado.png" width="125px" height="125px">
            </center>
            <br>
            <form action="index1.php" method="post">
                <div class="form-group">
                    <label> Usuario </label>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label> senha </label>
                    <input type="password" name="senha" class="form-control" placeholder="senha" autocomplete="off" required>
                </div>
           
            <br>
            <div style="text-align: right;">
                <button type="submit" class="btn btn-sm btn-success"> Entrar </button>
            </div>
            
        </div>
        </form>
    </div>
                <br>
    <center>
        <p> Ainda não possui cadastro clique <a href="cadastro_usuario_externo.php"> aqui </a></p>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>