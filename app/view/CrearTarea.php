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
        <p>Creando tarea:</p>
        <form method="POST" action="../controller/ctrlCrearTarea.php">
            <p><span style="color:red">*</span>Descripcion: <input type="text" name="descripcion" value = <?= ValorPost("descripcion") ?>>  <?=VerError("descripcion")?></p>
            <p><span style="color:red">*</span>Nombre de contacto: <input type="text" name="nombrecontacto" value = <?= ValorPost("nombrecontacto") ?>>  <?=VerError("nombrecontacto")?></p>
            <p><span style="color:red">*</span>Teléfono: <input type="text" name="telefono" value = <?= ValorPost("telefono") ?>>  <?=VerError("telefono")?></p>
            <p><span style="color:red">*</span>Correo electrónico: <input type="text" name="correo" value = <?= ValorPost("correo") ?>>  <?=VerError("correo")?></p>
            <p>Dirección: <input type="text" name="direccion" value = <?= ValorPost("direccion") ?>></p>
            <p><span style="color:red">*</span>Provincia:
                <select name="provincia">
                    <option id="01" value='alava' <?= guardarSelect("provincia","alava") ?>>Álava</option>
                    <option id="02" value='albacete' <?= guardarSelect("provincia","albacete") ?>>Albacete</option>
                    <option id="03" value='alicante' <?= guardarSelect("provincia","alicante") ?>>Alicante</option>
                    <option id="04" value='almeria' <?= guardarSelect("provincia","almeria") ?>>Almería</option>
                    <option id="05" value='avila' <?= guardarSelect("provincia","avila") ?>>Ávila</option>
                    <option id="06" value='badajoz' <?= guardarSelect("provincia","badajoz") ?>>Badajoz</option>
                    <option id="07" value='baleares' <?= guardarSelect("provincia","baleares") ?>>Islas Baleares</option>
                    <option id="08" value='barcelona' <?= guardarSelect("provincia","barcelona") ?>>Barcelona</option>
                    <option id="09" value='burgos' <?= guardarSelect("provincia","burgos") ?>>Burgos</option>
                    <option id="10" value='caceres' <?= guardarSelect("provincia","caceres") ?>>Cáceres</option>
                    <option id="11" value='cadiz' <?= guardarSelect("provincia","cadiz") ?>>Cádiz</option>
                    <option id="12" value='castellon' <?= guardarSelect("provincia","castellon") ?>>Castellón</option>
                    <option id="13" value='ciudadreal' <?= guardarSelect("provincia","ciudadreal") ?>>Ciudad Real</option>
                    <option id="14" value='cordoba' <?= guardarSelect("provincia","cordoba") ?>>Córdoba</option>
                    <option id="15" value='acoruña' <?= guardarSelect("provincia","acoruña") ?>>A Coruña</option>
                    <option id="16" value='cuenca' <?= guardarSelect("provincia","cuenca") ?>>Cuenca</option>
                    <option id="17" value='girona' <?= guardarSelect("provincia","girona") ?>>Girona</option>
                    <option id="18" value='granada' <?= guardarSelect("provincia","granada") ?>>Granada</option>
                    <option id="19" value='guadalajara' <?= guardarSelect("provincia","guadalajara") ?>>Guadalajara</option>
                    <option id="20" value='guipuzcoa' <?= guardarSelect("provincia","guipuzcoa") ?>>Guipúzcoa</option>
                    <option id="21" value='huelva' <?= guardarSelect("provincia","huelva") ?>>Huelva</option>
                    <option id="22" value='huesca' <?= guardarSelect("provincia","huesca") ?>>Huesca</option>
                    <option id="23" value='jaen' <?= guardarSelect("provincia","jaen") ?>>Jaén</option>
                    <option id="24" value='leon' <?= guardarSelect("provincia","leon") ?>>León</option>
                    <option id="25" value='lerida' <?= guardarSelect("provincia","lerida") ?>>Lérida</option>
                    <option id="26" value='larioja' <?= guardarSelect("provincia","larioja") ?>>La Rioja</option>
                    <option id="27" value='lugo' <?= guardarSelect("provincia","lugo") ?>>Lugo</option>
                    <option id="28" value='madrid' <?= guardarSelect("provincia","madrid") ?>>Madrid</option>
                    <option id="29" value='malaga' <?= guardarSelect("provincia","malaga") ?>>Málaga</option>
                    <option id="30" value='murcia' <?= guardarSelect("provincia","murcia") ?>>Murcia</option>
                    <option id="31" value='navarra' <?= guardarSelect("provincia","navarra") ?>>Navarra</option>
                    <option id="32" value='ourense' <?= guardarSelect("provincia","ourense") ?>>Ourense</option>
                    <option id="33" value='asturias' <?= guardarSelect("provincia","asturias") ?>>Asturias</option>
                    <option id="34" value='palencia' <?= guardarSelect("provincia","palencia") ?>>Palencia</option>
                    <option id="35" value='laspalmas' <?= guardarSelect("provincia","laspalmas") ?>>Las Palmas</option>
                    <option id="36" value='pontevedra' <?= guardarSelect("provincia","pontevedra") ?>>Pontevedra</option>
                    <option id="37" value='salamanca' <?= guardarSelect("provincia","salamanca") ?>>Salamanca</option>
                    <option id="38" value='santacruztenerife' <?= guardarSelect("provincia","santacruztenerife") ?>>Santa Cruz de Tenerife</option>
                    <option id="39" value='cantabria' <?= guardarSelect("provincia","cantabria") ?>>Cantabria</option>
                    <option id="40" value='segovia' <?= guardarSelect("provincia","segovia") ?>>Segovia</option>
                    <option id="41" value='sevilla' <?= guardarSelect("provincia","sevilla") ?>>Sevilla</option>
                    <option id="42" value='soria' <?= guardarSelect("provincia","soria") ?>>Soria</option>
                    <option id="43" value='tarragona' <?= guardarSelect("provincia","tarragona") ?>>Tarragona</option>
                    <option id="44" value='teruel' <?= guardarSelect("provincia","teruel") ?>>Teruel</option>
                    <option id="45" value='toledo' <?= guardarSelect("provincia","toledo") ?>>Toledo</option>
                    <option id="46" value='valencia' <?= guardarSelect("provincia","valencia") ?>>Valencia</option>
                    <option id="47" value='valladolid' <?= guardarSelect("provincia","valladolid") ?>>Valladolid</option>
                    <option id="48" value='vizcaya' <?= guardarSelect("provincia","vizcaya") ?>>Vizcaya</option>
                    <option id="49" value='zamora' <?= guardarSelect("provincia","zamora") ?>>Zamora</option>
                    <option id="50" value='zaragoza' <?= guardarSelect("provincia","zaragoza") ?>>Zaragoza</option>
                    <option id="51" value='ceuta' <?= guardarSelect("provincia","ceuta") ?>>Ceuta</option>
                    <option id="52" value='melilla' <?= guardarSelect("provincia","melilla") ?>>Melilla</option>
                </select>
            </p>
            <p>Población: <input type="text" name="poblacion" value = <?= ValorPost("poblacion") ?>></p>
            <p><span style="color:red">*</span>Código postal: <input type="text" name="codigopostal" value = <?= ValorPost("codigopostal") ?>>  <?=VerError("codigopostal")?></p>
            <p><span style="color:red">*</span>Estado de la tarea:
                <select name="estado">
                    <option <?= guardarSelect("estado","Realizada") ?>>Realizada</option>
                    <option <?= guardarSelect("estado","Pendiente") ?>>Pendiente</option>
                    <option <?= guardarSelect("estado","Cancelada") ?>>Cancelada</option>
                </select>
            </p>
            <!--<p><span style="color:red">*</span>Fecha de creación de la tarea: <input type="text" name="Fcreacion" value = "<?= fechaCrear()?>" readonly></p>-->
            <p><span style="color:red">*</span>Fecha de realización de la tarea: <input type="text" name="Frealizacion" value = <?= ValorPost("Frealizacion") ?>>  <?=VerError("Frealizacion")?></p>
            <p>Anotación anterior a la realización de la tarea: <input type="text" name="Aanterior" value = <?= ValorPost("Aanterior") ?>></p>
            <p>Anotación posterior a la realización de la tarea: <input type="text" name="Aposterior" value = <?= ValorPost("Aposterior") ?>></p>
            <p><span style="color:red">*</span>Operario asignado: <input type="text" name="operarioAsig" value = <?= ValorPost("operarioAsig") ?>>  <?=VerError("operarioAsig")?></p>

            <input type="submit" value="Aceptar">
        </form>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>