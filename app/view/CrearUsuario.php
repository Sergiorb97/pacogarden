<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Principal</title>
</head>

<body>
    <header><?php include TEMPLATE_PATH . "header.php" ?></header>
    <div id="menu"><?php include TEMPLATE_PATH . "menu.php" ?></div>
    <link rel="stylesheet" href="../../Assets/css/CrearUsuario.css">
    <div class="contenedorCrear">
        <h1>Crear Usuario</h1>
        <form method="POST" action="../controller/ctrlCrearUsuario.php">
            <p>Nombre de usuario<input type="text" class="btnCrear" name="user" value="<?= ValorPost('user') ?>">  <?= VerError('nombre') ?></p>
            <p>Contraseña<input type="password" class="btnCrear" name="pass" value="<?= ValorPost('pass') ?>">  <?= VerError('contraseña') ?></p>
            <p><select name="tipo" class="btnCrear">
                <option <?= guardarSelect("tipo","Administrador") ?>>Administrador</option>
                <option <?= guardarSelect("tipo","Operario") ?>>Operario</option>
            </select></p>
            <button type="submit">Crear</button>
        </form>
    </div>
    <div><?php include TEMPLATE_PATH . "footer.php" ?></div>