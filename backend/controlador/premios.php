<?php

class premiosControlador{

    public function ver_ganadores(){
        $consulta = premiosModelo::ver_ganadores();
       
        $c = 1;

        foreach($consulta as $row => $item){
            echo '<tr>
                <td>'.$c.'</td>
                <td>'.$item['nombres'].'</td>
                <td>'.$item['ci'].'</td>
                <td>'.$item['telefono'].'</td>
                <td>'.$item['correo'].'</td>
                <td>'.$item['numero_factura'].'</td>
                <td>'.$item['monto'].'</td>
                <td>'.$item['nombre'].'</td>
                <td>'.$item['descripcion'].'</td>
                <td>'.$item['fecha'].'</td>
                
            
            </tr>';
            $c++;
            
        }
        

    }
    
    public function nuevo_numero_factura(){
        if(isset($_POST['factura'])){

            $datosControlador = array("numero_factura"=>$_POST['numero_factura'],
                                        "administrador"=>$_SESSION['administrador']);
            $consulta = premiosModelo::nuevo_numero_factura($datosControlador);
            if($consulta == 'ok'){
                echo '	<script>
                                swal({
                                title: "Hecho!",
                                text: "Se registro la factura correctamente!",
                                type: "success",
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false,
                                },
                                function(isConfirm){
                                    if(isConfirm){
                                        window.location = "facturas";
                                    }
                                });
                                </script>
                            ';
            }else{
                echo '<script>
                    swal({
                    title: "Error!",
                    text: "Ha ocurrido un error!",
                    type: "error",
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false,
                    },
                    function(isConfirm){
                        if(isConfirm){
                            window.location = "facturas";
                        }
                    });
                </script>
            ';
            }
        }
      


    }

    public function ver_facturas_habilitadas(){

        $consulta = premiosModelo::ver_facturas_habilitadas();
       
        $c = 1;

        foreach($consulta as $row => $item){
            echo '<tr>
                <td>'.$c.'</td>
               
                <td>'.$item['numero_factura'].'</td>';
                if($item['estado']==0){
                    echo '<td>ON</td>';  
                }else{
                    echo '<td>OFF</td>'; 
                }
                
                
                
            
            echo '</tr>';
            $c++;
            
        }
    }
}

?>