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
    <div id="cuerpo">
        <form method="POST" action="../controller/ctrlModificarUsuario.php">
            <input type="hidden" name="tipo" value="<?= tomarValor('tipo') ?>">
            <input type="hidden" name="id" value="<?= tomarValor('id') ?>">
            <p>Nombre de usuario: <input type="text" name="nombre" value="<?= tomarValor('nombre') ?>"> <?= VerError('nombre') ?></p>
            <p>Contraseña: <input type="text" name="contraseña" value="<?= tomarValor('contraseña') ?>"> <?= VerError('contraseña') ?></p>
            <input type="submit" value="Aceptar">
        </form>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>