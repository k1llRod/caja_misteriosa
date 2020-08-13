<?php

require_once '../../controlador/configuracion.php';
require_once '../../modelo/configuracion.php';

class Ajax{

	public $idEstado;

	public function gestorGrupoAjax(){

		$datos = array('idEstado' => $this->idEstado);

		$respuesta = configuracionControlador::SubgrupoSelect($datos);

		echo $respuesta;
	}

	public $idUbicacion;
	public function gestorCentralAjax(){
		$datos = array('idUbicacion' => $this->idUbicacion);

		$respuesta = configuracionControlador::centralSelect($datos);
	}

	public $idCentral;
	public function gestorEncargadoAjax(){
		$datos = array('idCentral' => $this->idCentral);

		$respuesta = configuracionControlador::encargadoSelect($datos);
	}
}
if(isset($_POST['grupo'])){
	$a = new Ajax();
	$a -> idEstado = $_POST['grupo'];
	$a->gestorGrupoAjax();

}

if(isset($_POST['ubicacion'])){
	$b = new Ajax();
	$b -> idUbicacion = $_POST['ubicacion'];
	$b -> gestorCentralAjax();
}

if(isset($_POST['central'])){
	$c = new Ajax();
	$c -> idCentral = $_POST['central'];
	$c -> gestorEncargadoAjax();
}
 ?>