<?php
if(!isset($_POST['usuario']) && !isset($_POST['contraseña'])){
    include('../config.php');
    include CTRL_PATH . 'check_Sesion.php';
    include(VIEW_PATH.'MenuPrincipal.php');
}else{
    include VIEW_PATH . 'sesion.php';
    include(VIEW_PATH.'MenuPrincipal.php');
}
