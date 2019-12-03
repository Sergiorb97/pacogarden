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
        <form method="POST" action="../controller/ctrlCompletar.php">
            <p><input type="hidden" name="tareaid" value= <?= $_REQUEST['tareaid'] ?>></p>
            <p>Completando tarea Nº: <?= $_REQUEST['tareaid'] ?></p>
            <p><span style="color:red">*</span>Estado de la tarea:
                <label><input type="radio" value="Realizada" name="estado" checked>Realizada</label>
                <label><input type="radio" value="Pendiente" name="estado">Pendiente</label>
                <label><input type="radio" value="Cancelada" name="estado">Cancelada</label>
            </p>
            <p>Anotación anterior a la realización de la tarea: <input type="text" name="anotacion_anterior" value = "<?= tomarValor("anotacion_anterior") ?>"></p>
            <p>Anotación posterior a la realización de la tarea: <input type="text" name="anotacion_posterior" value = "<?= tomarValor("anotacion_posterior") ?>"></p>

            <input type="submit" value="Aceptar">
        </form>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>