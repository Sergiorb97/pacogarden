<?php

session_start();

if(!isset($_SESSION['login']) || !$_SESSION['login']){
    header('Location: ctrlLogin.php?error=0');
    exit;
}else if($_SESSION['tipo'] != "Operario"){
    include VIEW_PATH . 'sesion.php';
    include VIEW_PATH . 'accesoDenegado.php';
    exit;
}else{
    include VIEW_PATH . 'sesion.php';
}