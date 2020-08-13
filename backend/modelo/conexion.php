<?php
class conexion{
	public function conectar(){
		$link = new PDO('mysql:host=localhost;dbname=caja_misteriosa','root','');
		return $link;
	}
} 
 ?>