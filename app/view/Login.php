<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../Assets/css/Login.css">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1>Inicio de sesión</h1>
            <form method="POST" action="../controller/ctrlLogin.php" class="form">
                <input type="text" placeholder="Usuario" name="usuario" value="<?= ValorPost('usuario') ?>">
                <input type="password" placeholder="Contraseña" name="contraseña" value="<?= ValorPost('contraseña') ?>">
                <button type="submit" id="login-button" class="boton">Entrar</button>
                <br><?= VerErrorLogin() ?></br>
            </form>
        </div>
    </div>
</body>

</html>