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
            <p><span style="color:red">*</span>Descripcion: <input type="text" name="descripcion">  <?=VerError("descripcion")?></p>
            <p><span style="color:red">*</span>Nombre de contacto: <input type="text" name="nombrecontacto">  <?=VerError("nombrecontacto")?></p>
            <p><span style="color:red">*</span>Teléfono: <input type="text" name="telefono">  <?=VerError("telefono")?></p>
            <p><span style="color:red">*</span>Correo electrónico: <input type="text" name="correo">  <?=VerError("correo")?></p>
            <p>Dirección: <input type="text" name="direccion"></p>
            <p><span style="color:red">*</span>Provincia:
                <select name="provincia">
                    <option id="01" value='alava'>Álava</option>
                    <option id="02" value='albacete'>Albacete</option>
                    <option id="03" value='alicante'>Alicante</option>
                    <option id="04" value='almeria'>Almería</option>
                    <option id="05" value='avila'>Ávila</option>
                    <option id="06" value='badajoz'>Badajoz</option>
                    <option id="07" value='baleares'>Islas Baleares</option>
                    <option id="08" value='barcelona'>Barcelona</option>
                    <option id="09" value='burgos'>Burgos</option>
                    <option id="10" value='caceres'>Cáceres</option>
                    <option id="11" value='cadiz'>Cádiz</option>
                    <option id="12" value='castellon'>Castellón</option>
                    <option id="13" value='ciudadreal'>Ciudad Real</option>
                    <option id="14" value='cordoba'>Córdoba</option>
                    <option id="15" value='acoruña'>A Coruña</option>
                    <option id="16" value='cuenca'>Cuenca</option>
                    <option id="17" value='girona'>Girona</option>
                    <option id="18" value='granada'>Granada</option>
                    <option id="19" value='guadalajara'>Guadalajara</option>
                    <option id="20" value='guipuzcoa'>Guipúzcoa</option>
                    <option id="21" value='huelva'>Huelva</option>
                    <option id="22" value='huesca'>Huesca</option>
                    <option id="23" value='jaen'>Jaén</option>
                    <option id="24" value='leon'>León</option>
                    <option id="25" value='lerida'>Lérida</option>
                    <option id="26" value='larioja'>La Rioja</option>
                    <option id="27" value='lugo'>Lugo</option>
                    <option id="28" value='madrid'>Madrid</option>
                    <option id="29" value='malaga'>Málaga</option>
                    <option id="30" value='murcia'>Murcia</option>
                    <option id="31" value='navarra'>Navarra</option>
                    <option id="32" value='ourense'>Ourense</option>
                    <option id="33" value='asturias'>Asturias</option>
                    <option id="34" value='palencia'>Palencia</option>
                    <option id="35" value='laspalmas'>Las Palmas</option>
                    <option id="36" value='pontevedra'>Pontevedra</option>
                    <option id="37" value='salamanca'>Salamanca</option>
                    <option id="38" value='santacruztenerife'>Santa Cruz de Tenerife</option>
                    <option id="39" value='cantabria'>Cantabria</option>
                    <option id="40" value='segovia'>Segovia</option>
                    <option id="41" value='sevilla'>Sevilla</option>
                    <option id="42" value='soria'>Soria</option>
                    <option id="43" value='tarragona'>Tarragona</option>
                    <option id="44" value='teruel'>Teruel</option>
                    <option id="45" value='toledo'>Toledo</option>
                    <option id="46" value='valencia'>Valencia</option>
                    <option id="47" value='valladolid'>Valladolid</option>
                    <option id="48" value='vizcaya'>Vizcaya</option>
                    <option id="49" value='zamora'>Zamora</option>
                    <option id="50" value='zaragoza'>Zaragoza</option>
                    <option id="51" value='ceuta'>Ceuta</option>
                    <option id="52" value='melilla'>Melilla</option>
                </select>
            </p>
            <p>Población: <input type="text" name="poblacion"></p>
            <p><span style="color:red">*</span>Código postal: <input type="text" name="codigopostal">  <?=VerError("codigopostal")?></p>
            <p><span style="color:red">*</span>Estado de la tarea:
                <select name="estado">
                    <option>Realizada</option>
                    <option>Pendiente</option>
                    <option>Cancelada</option>
                </select>
            </p>
            <p><span style="color:red">*</span>Fecha de creación de la tarea: <input type="text" name="Fcreacion" readonly></p>
            <p><span style="color:red">*</span>Fecha de realización de la tarea: <input type="text" name="Frealizacion"></p>
            <p>Anotación anterior a la realización de la tarea: <input type="text" name="Aanterior"></p>
            <p>Anotación posterior a la realización de la tarea: <input type="text" name="Aposterior"></p>
            <p><span style="color:red">*</span>Operario asignado: <input type="text" name="operarioAsig"></p>

            <input type="submit" value="Aceptar">
        </form>
    </div>
    <div id="cuerpo"><?php include TEMPLATE_PATH . "footer.php" ?></div>