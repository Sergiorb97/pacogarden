<?php
include '../config.php';
if (isset($_GET)) {
    include(TEMPLATE_PATH . 'cuerpo.php');
} else {
    echo "No existen parametros";
}

function getOpc()
{
    return $_GET['opc'];
}
