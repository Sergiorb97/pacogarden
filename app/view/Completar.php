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
    <link rel="stylesheet" href="../../Assets/css/Completar.css">
    <div class="cuerpo">
        <div class="fondoCompletar">
            <h1>Completando tarea Nº: <?= $_REQUEST['tareaid'] ?></h1>
            <form method="POST" action="../controller/ctrlCompletar.php">
                <p><input type="hidden" name="tareaid" value=<?= $_REQUEST['tareaid'] ?>></p>
                <p><span style="color:red">*</span>Estado de la tarea
                    <p><label><input type="radio" value="Realizada" name="estado" checked>Realizada</label>
                    <label><input type="radio" value="Pendiente" name="estado">Pendiente</label>
                    <label><input type="radio" value="Cancelada" name="estado">Cancelada</label></p>
                </p>
                <p>Anotación anterior<input type="text" class="btnCompletar" name="anotacion_anterior" value="<?= tomarValor("anotacion_anterior") ?>"></p>
                <p>Anotación posterior<input type="text" class="btnCompletar" name="anotacion_posterior" value="<?= tomarValor("anotacion_posterior") ?>"></p>

                <button type="submit">Confirmar</button>
            </form>
        </div>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>