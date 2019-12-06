<?php

session_start();

if(!isset($_SESSION['login']) || !$_SESSION['login']){
    header('Location: ctrlLogin.php');
    exit;
}else{
    include VIEW_PATH . 'sesion.php';
}