<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'Funciones Base de datos.php';
include "ComprobarErrores.php";

$valores = [
    "descripcion" => ValorPost("descripcion"),
    "nombrecontacto" => ValorPost("nombrecontacto"),
    "telefono" => ValorPost("telefono"),
    "correo" => ValorPost("correo"),
    "direccion" => ValorPost("direccion"),
    "poblacion" => ValorPost("poblacion"),
    "codigopostal" => ValorPost("codigopostal"),
    "provincia" => ValorPost("provincia"),
    "estado" => ValorPost("estado"),
    "Fcreacion" => ValorPost("Fcreacion"),
    "Frealizacion" => ValorPost("Frealizacion"),
    "Aanterior" => ValorPost("Anterior"),
    "Aposterior" => ValorPost("Aposterior"),
    "operariosAsig" => ValorPost("operariosAsig")
];

comprobarTODO($valores);

if(!$HayError){
    echo $HayError."Datos correctos";
    añadirTarea();
}else{
    include VIEW_PATH."CrearTarea.php";
};
