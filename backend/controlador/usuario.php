<?php

class usuarioControlador{

    public function nuevo_usuario(){

        if(isset($_POST['nuevo_usuario'])){
            $datosControlador = array("nombre"=>$_POST['nombre'],
                                        "apellido"=>$_POST['apellido'],
                                        "ci" => $_POST['ci'],
                                        "usuario" => $_POST['usuario'],
                                        "pass"=>$_POST['pass']);

            $consulta = usuarioModelo::nuevo_usuario($datosControlador);
            if($consulta == "funciona"){

                echo "funciona";
            }else{
                echo "error";
            }

        }

    }

    public function ver_usuarios(){

        $ver = usuarioModelo::ver_usuarios();
        $c = 1;
        foreach($ver as $row => $item) {
            echo '<tr>
                <td>'.$c.'</td>
                <td>'.$item['nombre'].'</td>
                <td>'.$item['apellido'].'</td>
                <td>'.$item['ci'].'</td>
                <td>'.$item['usuario'].'</td>
                
            
            </tr>';
            $c++;
        }

    }
}

?>