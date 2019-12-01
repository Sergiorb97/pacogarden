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
        <form method="POST" action="../controller/ctrlModificar.php">
            <p><input type="hidden" name="tareaid" value= <?= $_REQUEST['tareaid'] ?>></p>
            <p>Modificando tarea Nº: <?= $_REQUEST['tareaid'] ?></p>
            <p><span style="color:red">*</span>Descripcion: <input type="text" name="descripcion" value = <?= tomarValor("descripcion") ?>>  <?=VerErrorModificar("descripcion")?></p>
            <p><span style="color:red">*</span>Nombre de contacto: <input type="text" name="nombrecontacto" value = <?= tomarValor("nombrecontacto") ?>>  <?=VerErrorModificar("nombrecontacto")?></p>
            <p><span style="color:red">*</span>Teléfono: <input type="text" name="telefono" value = <?= tomarValor("telefono") ?>>  <?=VerErrorModificar("telefono")?></p>
            <p><span style="color:red">*</span>Correo electrónico: <input type="text" name="correo_electronico" value = <?= tomarValor("correo_electronico") ?>>  <?=VerErrorModificar("correo_electronico")?></p>
            <p>Dirección: <input type="text" name="direccion" value = <?= tomarValor("direccion") ?>></p>
            <p><span style="color:red">*</span>Provincia:
                <select name="provincia">
                    <option id="01" value='alava' <?= guardarSelectModificar("provincia","alava") ?>>Álava</option>
                    <option id="02" value='albacete' <?= guardarSelectModificar("provincia","albacete") ?>>Albacete</option>
                    <option id="03" value='alicante' <?= guardarSelectModificar("provincia","alicante") ?>>Alicante</option>
                    <option id="04" value='almeria' <?= guardarSelectModificar("provincia","almeria") ?>>Almería</option>
                    <option id="05" value='avila' <?= guardarSelectModificar("provincia","avila") ?>>Ávila</option>
                    <option id="06" value='badajoz' <?= guardarSelectModificar("provincia","badajoz") ?>>Badajoz</option>
                    <option id="07" value='baleares' <?= guardarSelectModificar("provincia","baleares") ?>>Islas Baleares</option>
                    <option id="08" value='barcelona' <?= guardarSelectModificar("provincia","barcelona") ?>>Barcelona</option>
                    <option id="09" value='burgos' <?= guardarSelectModificar("provincia","burgos") ?>>Burgos</option>
                    <option id="10" value='caceres' <?= guardarSelectModificar("provincia","caceres") ?>>Cáceres</option>
                    <option id="11" value='cadiz' <?= guardarSelectModificar("provincia","cadiz") ?>>Cádiz</option>
                    <option id="12" value='castellon' <?= guardarSelectModificar("provincia","castellon") ?>>Castellón</option>
                    <option id="13" value='ciudadreal' <?= guardarSelectModificar("provincia","ciudadreal") ?>>Ciudad Real</option>
                    <option id="14" value='cordoba' <?= guardarSelectModificar("provincia","cordoba") ?>>Córdoba</option>
                    <option id="15" value='acoruña' <?= guardarSelectModificar("provincia","acoruña") ?>>A Coruña</option>
                    <option id="16" value='cuenca' <?= guardarSelectModificar("provincia","cuenca") ?>>Cuenca</option>
                    <option id="17" value='girona' <?= guardarSelectModificar("provincia","girona") ?>>Girona</option>
                    <option id="18" value='granada' <?= guardarSelectModificar("provincia","granada") ?>>Granada</option>
                    <option id="19" value='guadalajara' <?= guardarSelectModificar("provincia","guadalajara") ?>>Guadalajara</option>
                    <option id="20" value='guipuzcoa' <?= guardarSelectModificar("provincia","guipuzcoa") ?>>Guipúzcoa</option>
                    <option id="21" value='huelva' <?= guardarSelectModificar("provincia","huelva") ?>>Huelva</option>
                    <option id="22" value='huesca' <?= guardarSelectModificar("provincia","huesca") ?>>Huesca</option>
                    <option id="23" value='jaen' <?= guardarSelectModificar("provincia","jaen") ?>>Jaén</option>
                    <option id="24" value='leon' <?= guardarSelectModificar("provincia","leon") ?>>León</option>
                    <option id="25" value='lerida' <?= guardarSelectModificar("provincia","lerida") ?>>Lérida</option>
                    <option id="26" value='larioja' <?= guardarSelectModificar("provincia","larioja") ?>>La Rioja</option>
                    <option id="27" value='lugo' <?= guardarSelectModificar("provincia","lugo") ?>>Lugo</option>
                    <option id="28" value='madrid' <?= guardarSelectModificar("provincia","madrid") ?>>Madrid</option>
                    <option id="29" value='malaga' <?= guardarSelectModificar("provincia","malaga") ?>>Málaga</option>
                    <option id="30" value='murcia' <?= guardarSelectModificar("provincia","murcia") ?>>Murcia</option>
                    <option id="31" value='navarra' <?= guardarSelectModificar("provincia","navarra") ?>>Navarra</option>
                    <option id="32" value='ourense' <?= guardarSelectModificar("provincia","ourense") ?>>Ourense</option>
                    <option id="33" value='asturias' <?= guardarSelectModificar("provincia","asturias") ?>>Asturias</option>
                    <option id="34" value='palencia' <?= guardarSelectModificar("provincia","palencia") ?>>Palencia</option>
                    <option id="35" value='laspalmas' <?= guardarSelectModificar("provincia","laspalmas") ?>>Las Palmas</option>
                    <option id="36" value='pontevedra' <?= guardarSelectModificar("provincia","pontevedra") ?>>Pontevedra</option>
                    <option id="37" value='salamanca' <?= guardarSelectModificar("provincia","salamanca") ?>>Salamanca</option>
                    <option id="38" value='santacruztenerife' <?= guardarSelectModificar("provincia","santacruztenerife") ?>>Santa Cruz de Tenerife</option>
                    <option id="39" value='cantabria' <?= guardarSelectModificar("provincia","cantabria") ?>>Cantabria</option>
                    <option id="40" value='segovia' <?= guardarSelectModificar("provincia","segovia") ?>>Segovia</option>
                    <option id="41" value='sevilla' <?= guardarSelectModificar("provincia","sevilla") ?>>Sevilla</option>
                    <option id="42" value='soria' <?= guardarSelectModificar("provincia","soria") ?>>Soria</option>
                    <option id="43" value='tarragona' <?= guardarSelectModificar("provincia","tarragona") ?>>Tarragona</option>
                    <option id="44" value='teruel' <?= guardarSelectModificar("provincia","teruel") ?>>Teruel</option>
                    <option id="45" value='toledo' <?= guardarSelectModificar("provincia","toledo") ?>>Toledo</option>
                    <option id="46" value='valencia' <?= guardarSelectModificar("provincia","valencia") ?>>Valencia</option>
                    <option id="47" value='valladolid' <?= guardarSelectModificar("provincia","valladolid") ?>>Valladolid</option>
                    <option id="48" value='vizcaya' <?= guardarSelectModificar("provincia","vizcaya") ?>>Vizcaya</option>
                    <option id="49" value='zamora' <?= guardarSelectModificar("provincia","zamora") ?>>Zamora</option>
                    <option id="50" value='zaragoza' <?= guardarSelectModificar("provincia","zaragoza") ?>>Zaragoza</option>
                    <option id="51" value='ceuta' <?= guardarSelectModificar("provincia","ceuta") ?>>Ceuta</option>
                    <option id="52" value='melilla' <?= guardarSelectModificar("provincia","melilla") ?>>Melilla</option>
                </select>
            </p>
            <p>Población: <input type="text" name="poblacion" value = <?= tomarValor("poblacion") ?>></p>
            <p><span style="color:red">*</span>Código postal: <input type="text" name="codigo_postal" value = <?= tomarValor("codigo_postal") ?>>  <?=VerErrorModificar("codigo_postal")?></p>
            <p><span style="color:red">*</span>Estado de la tarea:
                <select name="estado">
                    <option <?= guardarSelectModificar("estado","Realizada") ?>>Realizada</option>
                    <option <?= guardarSelectModificar("estado","Pendiente") ?>>Pendiente</option>
                    <option <?= guardarSelectModificar("estado","Cancelada") ?>>Cancelada</option>
                </select>
            </p>
            <!--<p><span style="color:red">*</span>Fecha de creación de la tarea: <input type="text" name="fecha_creacion" value = "<?= tomarValor('fecha_creacion') ?>" readonly></p>-->
            <p><span style="color:red">*</span>Fecha de realización de la tarea: <input type="text" name="fecha_realizacion" value = <?= tomarValor("fecha_realizacion") ?>>  <?=VerErrorModificar("fecha_realizacion")?></p>
            <p>Anotación anterior a la realización de la tarea: <input type="text" name="anotacion_anterior" value = <?= tomarValor("anotacion_anterior") ?>></p>
            <p>Anotación posterior a la realización de la tarea: <input type="text" name="anotacion_posterior" value = <?= tomarValor("anotacion_posterior") ?>></p>
            <p><span style="color:red">*</span>Operario asignado: <input type="text" name="operario_id" value = <?= tomarValor("operario_id") ?>>  <?=VerErrorModificar("operario_id")?></p>

            <input type="submit" value="Aceptar">
        </form>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>