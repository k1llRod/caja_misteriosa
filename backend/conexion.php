<?php 

class conexion{
	public function conectar(){
		$link = new PDO('mysql:host=localhost;dbname=xxyhvoij_caja_misteriosa','xxyhvoij','Y5@xF0rq9oS.3G');
		return $link;
	}
}

 ?>