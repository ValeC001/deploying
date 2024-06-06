<?php
/* controladores */
require_once "controlador/usuarioControlador.php";
require_once "controlador/plantillaControlador.php";
require_once "controlador/personalControlador.php";
require_once "controlador/materialControlador.php";
require_once "controlador/proyectoControlador.php";


/* modelos */
require_once "modelo/usuarioModelo.php";
require_once "modelo/personalModelo.php";
require_once "modelo/materialModelo.php";
require_once "modelo/proyectoModelo.php";



$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();