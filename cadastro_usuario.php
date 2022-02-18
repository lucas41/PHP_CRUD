<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container" style="width: 400px; margin-top: 100px;">
        <h4> Cadastro de Usuario </h4>
        <br>
        <form action="_insert_usuario.php" method="post" >
            <div class="form-group">
                <label>Nome do Usuario </label>
                <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome completo">
            </div>
            <div class="form-group">
                <label>E-mail </label>
                <input type="text" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu Email">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" id="senhausuario" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Sua senha">
            </div>

            <div class="form-group">
                <label>Repetir Senha</label>
                <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Confirmação de senha" oninput="validaSenha(this)">
                <small> Precisa ser igual a senha digitada acima </small>
            </div>
            <br>
            <div class="form-group">
                <label>Nivel de acesso </label>
                <select class="form-control" name="nivelusuario">
                    <optgroup>
                        <option value="1" selected>Administrador</option>
                        <option value="2">Funcionario</option>
                        <option value="3">Conferente</option>
                    </optgroup>
                </select>
            </div>
            <br>
            <div style="text-align: right">
                <button type="submit" class="btn btn-sm btn-success"> Cadastrar </button>
            </div>
        </form>

    </div>
    <script>
        function validaSenha(input) {
            if (input.value != document.getElementById('senhausuario').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>