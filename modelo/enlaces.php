<?php

class enlacesModelo{
	public function enlacesPaginaModelo($enlaces){
		if($enlaces == 'index' ||
			$enlaces == 'concursa'){

			$modulo = 'vista/modulos/'.$enlaces.'.php';

		}else if($enlaces == 'index'){
			$modulo = 'vista/modulos/index.php';
		}
		else{
			$modulo = 'vista/modulos/index.php';
		}
		return $modulo;
	}
}

 ?>