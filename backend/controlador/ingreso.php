<?php

class ingresoControlador {
	public function ingresoPostControlador(){
		if(isset($_POST['inputText'])){

			$varControlador = array('usuario'=>$_POST['inputText'],'password'=>$_POST['inputPassword'] );
			
			$resultado = ingresoModelo::ingresoPostModelo($varControlador);
			
			if($resultado['usuario'] == $_POST['inputText'] &&
				$resultado['pass'] == $_POST['inputPassword'] ){
				session_start();
				$_SESSION['validar'] = true;
				$_SESSION['cuenta'] = $resultado['usuario'];
				
				$nombre = explode(" ", $resultado['nombre']);
				$_SESSION['nombre'] = $nombre[0];

				
				$apellido = explode(" ", $resultado['apellido']);
				$_SESSION['apellido'] = $apellido[0];

				$_SESSION['ci'] = $resultado['ci'];
				$_SESSION['administrador'] = $resultado['id_usuario'];
				
				
				
				
				header('location:inicio');
			}
			else{
				echo '<div class="alert alert-warning">Error al ingresar </div>';
			}
		}
		
	}

}


 ?>
