<p>Filtrado de datos</p>
            <form method="POST" action="../controller/ctrlBuscarTarea.php">
                <p>Tarea ID 
                    <span>
                        <select name="comparadorID">
                            <option <?= guardarSelect("comparadorID", "=") ?>>=</option>
                            <option <?= guardarSelect("comparadorID", "<") ?>><</option> 
                            <option <?= guardarSelect("comparadorID", ">") ?>>></option>
                            <option <?= guardarSelect("comparadorID", "<=") ?>><=</option> 
                            <option <?= guardarSelect("comparadorID", ">=") ?>>>=</option>
                        </select> 
                        <input type="text" name="id" value="<?= ValorPost("id") ?>" size="3"> <?= VerError("id") ?>
                    </span>
                </p>
                <p>Nombre contacto
                    <span>
                        <select name="comparadornombre">
                            <option <?= guardarSelect("comparadornombre", "=") ?>>=</option>
                            <option <?= guardarSelect("comparadornombre", "Contiene") ?>>Contiene</option> 
                        </select>
                        <input type="text" name="nombrecontacto" value="<?= ValorPost("nombrecontacto") ?>">
                    </span>
                </p>
                <p>Estado = 
                    <select name="estado">
                        <option></option>
                        <option <?= guardarSelect("estado", "Realizada") ?>>Realizada</option>
                        <option <?= guardarSelect("estado", "Pendiente") ?>>Pendiente</option>
                        <option <?= guardarSelect("estado", "Cancelada") ?>>Cancelada</option>
                    </select>
                </p>
                <p>Fecha de creación
                    <span>
                        <select name="comparadorcreacion">
                            <option <?= guardarSelect("comparadorcreacion", "=") ?>>=</option>
                            <option <?= guardarSelect("comparadorcreacion", "<") ?>><</option> 
                            <option <?= guardarSelect("comparadorcreacion", ">") ?>>></option>
                            <option <?= guardarSelect("comparadorcreacion", "<=") ?>><=</option> 
                            <option <?= guardarSelect("comparadorcreacion", ">=") ?>>>=</option>
                        </select>
                        <input type="text" name="creacion" value="<?= ValorPost("creacion") ?>"> <?= VerError("creacion") ?>
                    </span>
                </p>
                <p>Fecha de realización
                <span>
                        <select name="comparadorrealizacion">
                            <option <?= guardarSelect("comparadorrealizacion", "=") ?>>=</option>
                            <option <?= guardarSelect("comparadorrealizacion", "<") ?>><</option> 
                            <option <?= guardarSelect("comparadorrealizacion", ">") ?>>></option>
                            <option <?= guardarSelect("comparadorrealizacion", "<=") ?>><=</option> 
                            <option <?= guardarSelect("comparadorrealizacion", ">=") ?>>>=</option>
                        </select>
                        <input type="text" name="realizacion" value="<?= ValorPost("realizacion") ?>"> <?= VerError("realizacion") ?>
                    </span>
                </p>
                <p>Provincia = 
                    <select name="provincia">
                        <option></option>
                        <?php mostrarProvincias(); ?>
                    </select>
                </p>
                <input type="submit" value="Aceptar">
            </form>