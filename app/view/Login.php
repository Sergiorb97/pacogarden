<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<div>
<p>Inicio de sesión</p>
    <form method="POST" action="../controller/ctrlLogin.php">
        <p>Inserta tu nombre de usuario: <input type="text" name="usuario" value="<?= ValorPost('usuario') ?>"></p>
        <p>Inserta tu contraseña: <input type="password" name="contraseña" value="<?= ValorPost('contraseña') ?>"></p>
        <p><?= VerErrorLogin() ?></p>
        <input type="submit">
    </form>
</div>
</body>
</html>