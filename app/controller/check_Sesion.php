<?php

session_start();

if(!isset($_SESSION['login']) || !$_SESSION['login']){
    header('Location: ctrlLogin.php?error=0');
    exit;
}else{
    include VIEW_PATH . 'sesion.php';
}