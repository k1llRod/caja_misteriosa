<?php
class enlacesModelo{
	public function enlacesPaginaModelo($enlaces){
		if($enlaces == 'inicio' ||
			$enlaces == 'facturas' ||
			$enlaces == 'nuevo_usuario' ||
			$enlaces == 'ver_usuarios' ||
			$enlaces == 'registro'){
			$modulo = 'vista/modulos/'.$enlaces.'.php';
		}else if($enlaces == 'index'){

			$modulo = 'vista/modulos/ingreso.php';
		}else{
			$modulo = 'vista/modulos/ingreso.php';
		}
		return $modulo;
	}
}
 ?>