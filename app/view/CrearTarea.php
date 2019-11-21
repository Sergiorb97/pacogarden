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
        <form method="POST" action="../controller/ctrlCrearTarea.php">
            <p>Descripcion: <input type="text" name="descripcion"></p>
            <p>Nombre de contacto: <input type="text" name="nombrecontacto"></p>
            <p>Teléfono: <input type="text" name="telefono"></p>
            <p>Correo electrónico: <input type="text" name="correo"></p>
            <p>Dirección: <input type="text" name="direccion"></p>
            <p>Población: <input type="text" name="poblacion"></p>
            <p>Código postal: <input type="text" name="codigopostal"></p>
            <p>Provincia:
                <select name="provincia">
                </select>
            </p>
            <p>Estado de la tarea:
                <select name="estado">
                    <option>Realizada</option>
                    <option>Pendiente</option>
                    <option>Cancelada</option>
                </select>
            </p>
            <p>Fecha de creación de la tarea: <input type="text" name="Fcreacion"></p>
            <p>Fecha de realización de la tarea: <input type="text" name="Frealizacion"></p>
            <p>Anotación anterior a la realización de la tarea: <input type="text" name="Aanterior"></p>
            <p>Anotación posterior a la realización de la tarea: <input type="text" name="Aposterior"></p>
            <p>Operario asignado: <input type="text" name="operarioAsig"></p>

            <input type="submit" value="Aceptar">
        </form>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>