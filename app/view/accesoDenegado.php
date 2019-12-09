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
        <h2 style="color:red; margin-top:10%;margin-left:26%">No tienes los permisos necesarios para acceder a esta acción.</h2>
        <img src="../../Assets/img/denegado.png" style="margin:3% 43%; width:150px; height:150px" title="Donde crees que vas">
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>