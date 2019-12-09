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
    <link rel="stylesheet" href="../../Assets/css/Paginacion.css">
    <form style="margin: 10% 30%">
        <h2>¿ Realmente deseas eliminar la tarea con <span style="color:red">ID: <?= $id ?></span>?</h2>
        <h3 style="margin-left: 30%">
            <a href="../controller/ctrlEliminarTarea.php?opc=si&id=<?= $id ?>" class="anim">Si</a>
            <a href="../controller/ctrlEliminarTarea.php?opc=no" style="margin-left:70px" class="anim">No</a>
        </h3>
    </form>
    <div><?php include TEMPLATE_PATH . "footer.php" ?></div>