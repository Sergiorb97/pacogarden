<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'Funciones Base de datos.php';
include "ComprobarErrores.php";

/*$descripcion = ValorPost("descripcion");
$nombreContacto = ValorPost("nombrecontacto");
$telefono = ValorPost("telefono");
$correo = ValorPost("correo");
$direccion = ValorPost("direccion");
$poblacion = ValorPost("poblacion");
$CD = ValorPost("codigopostal");
$provincia = ValorPost("provincia");
$estado = ValorPost("estado");
$Fcreacion = ValorPost("Fcreacion");
$Frealizacion = ValorPost("Frealizacion");
$Aanterior = ValorPost("Aanterior");
$Aposterior = ValorPost("Aposterior");
$operario = ValorPost("operariosAsig");*/

/*comprobar(
    $descripcion,
    $nombreContacto,
    $telefono,
    $correo,
    $direccion,
    $poblacion,
    $CD,
    $provincia,
    $estado,
    $Fcreacion,
    $Frealizacion,
    $Aanterior,
    $Aposterior,
    $operario
);*/

if(comprobarTODO(
    ValorPost("descripcion"),
    ValorPost("nombrecontacto"),
    ValorPost("telefono"),
    ValorPost("correo"),
    ValorPost("direccion"),
    ValorPost("poblacion"),
    ValorPost("codigopostal"),
    ValorPost("provincia"),
    ValorPost("estado"),
    ValorPost("Fcreacion"),
    ValorPost("Frealizacion"),
    ValorPost("Aanterior"),
    ValorPost("Aposterior"),
    ValorPost("operariosAsig")
)){
    echo "Datos correctos";
}else{
    echo "Introduce correctamente los datos";
};

añadirTarea();

include VIEW_PATH."CrearTarea.php";
