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
        <div id="filtrado">
            <p>Filtrado de datos</p>
            <p>Tarea ID:
                <span>
                    <input type="text" name="idMin" size="3">
                    <select name="comparador">
                        <option name="=">=</option>
                        <option name="<"><</option>
                        <option name=">">></option>
                        <option name="<="><=</option>
                        <option name=">=">>=</option>
                    </select>
                    <input type="text" name="idMax" size="3">
                </span>
            </p>
            <p>Estado:
                <select name="estado">
                    <option></option>
                    <option name="realizada">Realizada</option>
                    <option name="pendiente">Pendiente</option>
                    <option name="cancelada">Cancelada</option>
                </select>
            </p>
            <p>Provincia:
                <select name="provincia">
                </select>
            </p>
        </div>
        <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>