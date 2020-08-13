<?php
require_once 'controlador/plantilla.php';
require_once 'controlador/enlaces.php';
require_once 'controlador/ingreso.php';
require_once 'controlador/premios.php';
require_once 'controlador/usuario.php';




require_once 'modelo/enlaces.php';
require_once 'modelo/ingreso.php';
require_once 'modelo/premios.php';
require_once 'modelo/usuario.php';


$plantilla = new plantillaControlador();
$plantilla->plantilla();
 ?>