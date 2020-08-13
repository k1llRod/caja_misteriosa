<?php
class concursarControlador{

    public function concursar(){

    
        
        if(isset($_POST['registrar'])){
            $datosControlador = array("nombres" => $_POST['nombres'],
                                    "ci" => $_POST['ci'],
                                    "telefono" => $_POST['telefono'],
                                    "email" => $_POST['email'],
                                    "factura" => $_POST['factura'],
                                    "monto" => $_POST['monto'],
                                    "ciudad" => $_POST['ciudad']);
            
            if($datosControlador['monto'] >=450){
                $respuesta = concursarModelo::concursar_verificar($datosControlador);
                if($respuesta){
                   

                    $registrar = concursarModelo::concursar($datosControlador);
                    if($registrar == "error"){

                        //echo "factura".$datosControlador['monto'];
                        echo "error al asignar";
                
                    }else{
                        
                        echo '	<script>
                        swal({
                        title: "Felicidades!",
                        text: "Usted ha ganado '.$registrar.'! Puede apersonarse por cualquiera de nuestras sucursales",
                        type: "success",
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false,
                        },
                        function(isConfirm){
                            if(isConfirm){
                                window.location = "concursa";
                            }
                        });
                        </script>
                    ';
                    }

                }else{
                    echo '	<script>
                    swal({
                    title: "Error!",
                    text: "El numero de factura no se encuentra habilitado!",
                    type: "error",
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false,
                    },
                    function(isConfirm){
                        if(isConfirm){
                            window.location = "concursa";
                        }
                    });
                    </script>
                    ';
                }
            }else{
                //echo "factura".$datosControlador['monto'];
                
                echo '	<script>
						swal({
						title: "Error!",
						text: "No cumple con el monto requerido!",
						type: "error",
						confirmButtonText: "Cerrar",
						closeOnConfirm: false,
						},
						function(isConfirm){
							if(isConfirm){
								window.location = "concursa";
							}
						});
						</script>
                        ';
                        
            }
        }

        
        
        
         
    }

}
?>