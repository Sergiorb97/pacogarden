<?php
include '../config.php';
include CTRL_PATH . 'ValorPost.php';
include MODEL_PATH . 'FuncionesCrearTarea.php';
include "ComprobarErroresCrearTarea.php";

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
    "operarioAsig" => ValorPost("operarioAsig")
];

comprobarTODO($valores);

if(!$HayError){
    añadirTarea($valores);
    include VIEW_PATH."exito.php";
}else{
    include VIEW_PATH."CrearTarea.php";
};
