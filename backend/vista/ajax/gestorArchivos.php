<?php

require_once '../../controlador/configuracion.php';
require_once '../../modelo/configuracion.php';


class Ajax{

	// SUBIR ARCHIVO 

	public $idGrupo;
	


	public function gestorGrupoAjax(){

		$datos = array('idGrupo'=>$this->idGrupo);
		

		$respuesta = configuracionControlador::verSelectSubgrupo($datos);
		echo $respuesta;
	}

}

if(isset($_FILES['archivo']['tmp_name']) ){
		$a = new Ajax();
		$a -> archivoTemporal = $_FILES['archivo']['tmp_name'];
		$a -> nombreTemporal = $_FILES['archivo']['name'];
		$a -> listaActa = $_POST['listaActa'];
		$a -> idCadete = $_POST['idCadete'];
		$a -> ciCadete = $_POST['ciCadete'];
		$a -> idUsuario = $_POST['idUsuario'];
		$a -> ciUsuario = $_POST['ciUsuario'];
		$a -> idSancion = $_POST['idSancion'];
		$a -> gestorArchivosAjax();
	} 



 ?>

