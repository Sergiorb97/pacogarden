<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="../../Assets/css/GestorUsuarios.css">
</head>

<body>
    <header><?php include TEMPLATE_PATH . "header.php" ?></header>
    <div id="menu"><?php include TEMPLATE_PATH . "menu.php" ?></div>
    <div id="cuerpo">
        <p>
            <a href="../controller/ctrlCrearUsuario.php"><img src="../../Assets/img/añadirUsuario.png" class="añadirUsuario" title="Añadir usuario"></a>
            <a href="../controller/ctrlVerUsuarios.php"><img src="../../Assets/img/listaUsuarios.png" class="verUsuarios" title="Lista de usuarios"></a>
        </p>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>