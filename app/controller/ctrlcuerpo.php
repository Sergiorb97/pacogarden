<?php
$opc = getOpc();

if($opc == 'crear'){
    include(VIEW_PATH.'CrearTarea.php');
}else if($opc == 'ver'){

}else{
    echo 'Error no existen parametros';
}