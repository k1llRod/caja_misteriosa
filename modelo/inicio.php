<?php 

require_once 'conexion.php';
class inicioModelo{
	public function verComunicadosModelo(){
		$consulta = conexion::conectar()->prepare('SELECT * FROM inicio ORDER BY orden ASC');
		$consulta -> execute();
		return $consulta->fetchAll();
		$consulta = close();
		//asd

	}
}
?>