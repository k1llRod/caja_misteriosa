<?php

class enlacesControlador{
	public function enlacesControladores(){
		if(isset($_GET['action'])){
			$enlaces = $_GET['action'];
		}
		else{
			$enlaces = 'index';
		}
		
		$respuesta = enlacesModelo::enlacesPaginaModelo($enlaces);
		
		include $respuesta;
	}
}

 ?>