<link rel="stylesheet" href="../../Assets/css/Filtros.css">
<div class="FiltrosContainer">
    <h1>Filtrado de datos</h1>
    <form method="POST" action="../controller/ctrlBuscarTarea.php">
        <p>Tarea ID
            <select name="comparadorID" class="btnFiltrar">
                <option <?= guardarSelect("comparadorID", "=") ?>>=</option>
                <option <?= guardarSelect("comparadorID", "<") ?>>
                    <</option> <option <?= guardarSelect("comparadorID", ">") ?>>>
                </option>
                <option <?= guardarSelect("comparadorID", "<=") ?>>
                    <=</option> <option <?= guardarSelect("comparadorID", ">=") ?>>>=
                </option>
            </select>
            <input type="text" class="btnFiltrar" name="id" value="<?= ValorPost("id") ?>" size="3"></br>
            <span><?= VerError("id") ?></span>
        </p>
        <p>Nombre contacto
            <select name="comparadornombre" class="btnFiltrar">
                <option <?= guardarSelect("comparadornombre", "=") ?>>=</option>
                <option <?= guardarSelect("comparadornombre", "Contiene") ?>>Contiene</option>
            </select>
            <input type="text" name="nombrecontacto" value="<?= ValorPost("nombrecontacto") ?>" class="btnFiltrar">
        </p>
        <p>Estado =
            <select name="estado" class="btnFiltrar">
                <option></option>
                <option <?= guardarSelect("estado", "Realizada") ?>>Realizada</option>
                <option <?= guardarSelect("estado", "Pendiente") ?>>Pendiente</option>
                <option <?= guardarSelect("estado", "Cancelada") ?>>Cancelada</option>
            </select>
        </p>
        <p>Fecha de creación
            <select name="comparadorcreacion" class="btnFiltrar">
                <option <?= guardarSelect("comparadorcreacion", "=") ?>>=</option>
                <option <?= guardarSelect("comparadorcreacion", "<") ?>>
                    <</option> <option <?= guardarSelect("comparadorcreacion", ">") ?>>>
                </option>
                <option <?= guardarSelect("comparadorcreacion", "<=") ?>>
                    <=</option> <option <?= guardarSelect("comparadorcreacion", ">=") ?>>>=
                </option>
            </select>
            <input type="text" class="btnFiltrar" name="creacion" value="<?= ValorPost("creacion") ?>">
            <span><?= VerError("creacion") ?></span>
        </p>
        <p>Fecha de realización
            <select name="comparadorrealizacion" class="btnFiltrar">
                <option <?= guardarSelect("comparadorrealizacion", "=") ?>>=</option>
                <option <?= guardarSelect("comparadorrealizacion", "<") ?>>
                    <</option> <option <?= guardarSelect("comparadorrealizacion", ">") ?>>>
                </option>
                <option <?= guardarSelect("comparadorrealizacion", "<=") ?>>
                    <=</option> <option <?= guardarSelect("comparadorrealizacion", ">=") ?>>>=
                </option>
            </select>
            <input type="text" class="btnFiltrar" name="realizacion" value="<?= ValorPost("realizacion") ?>">
            <span><?= VerError("realizacion") ?></span>
        </p>
        <p>Provincia =
            <select name="provincia" class="btnFiltrar">
                <option></option>
                <?php mostrarProvincias(); ?>
            </select>
        </p>
        <button type="submit">Aceptar</button>
    </form>
</div>