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
        <h1>Modificar usuario</h1>
        <form method="POST" action="../controller/ctrlModificarUsuario.php">
            <input type="hidden" name="tipo" value="<?= tomarValor('tipo') ?>">
            <input type="hidden" name="id" value="<?= tomarValor('id') ?>">
            <p>Nombre de usuario<input type="text"  class="btnCrear" name="nombre" value="<?= tomarValor('nombre') ?>"> <?= VerError('nombre') ?></p>
            <p>Contraseña<input type="text"  class="btnCrear" name="contraseña" value="<?= tomarValor('contraseña') ?>"> <?= VerError('contraseña') ?></p>
            <button type="submit">Aceptar</button>
        </form>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>