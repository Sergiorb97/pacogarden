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
    <form>
        <p>¿ Realmente deseas eliminar el <?= $tipo ?> con id: <?= $id ?>?</p>
        <p><a href="../controller/ctrlEliminarUsuario.php?opc=si&id=<?= $id ?>&tipo=<?= $tipo ?>">Si</a> <a href="../controller/ctrlEliminarUsuario.php?opc=no">No</a></p>
    </form>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>