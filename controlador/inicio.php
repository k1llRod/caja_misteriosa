<?php
class inicioControlador{
	public function verComunicadosControlador(){
	$consulta = inicioModelo::verComunicadosModelo();
	$sw = 0;
	foreach ($consulta as $row => $item) {
			if($sw == 0){
				echo '<div class="carousel-item active" data-interval="3000">
					      <img src="backend/'.substr($item['imagen'], 6).'" class="d-block w-100" alt="...">
					    </div>';
				$sw = 1;
			}else{
				echo '<div class="carousel-item" data-interval="3000">
					      <img src="backend/'.substr($item['imagen'], 6).'" class="d-block w-100" alt="...">
					    </div>'; 
			}
		}

	}
} 
 ?>