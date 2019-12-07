<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesLogin.php';
include CTRL_PATH . 'check_Admin.php';
$datosAdmin = VerAdmins();
$datosOper = VerOpers();
include VIEW_PATH . 'listaUsuarios.php';