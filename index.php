<?php
require_once 'controlador/plantilla.php';
require_once 'controlador/enlaces.php';
require_once 'controlador/inicio.php';
require_once 'controlador/concursar.php';


require_once 'modelo/enlaces.php';
require_once 'modelo/inicio.php';
require_once 'modelo/concursar.php';



$plantilla = new plantillaControlador();
$plantilla->plantilla();
 ?>