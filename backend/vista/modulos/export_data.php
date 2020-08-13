<?php
include '../../conect/conexion.php';

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=reporte_ganadores.xls");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Reporte</title>
	<style>
    .xl65
        {mso-style-parent:style0;
        mso-number-format:'\@';}
	
	</style>
</head>
<body>
<?php
include_once '../../modelo/conexion.php';
    
    $consulta = conexion::conectar()->prepare("SELECT * 
        FROM participa p LEFT JOIN clientes_concursantes cc ON p.id_cliente = cc.id_cliente 
        LEFT JOIN premios_productos pp ON pp.id_premio = p.id_premio 
        LEFT JOIN ciudad c ON c.id_ciudad = cc.id_ciudad
        WHERE 1 ");

        $consulta -> execute();
        $ver = $consulta -> fetchAll();
       

        $c = 1;

        echo '
        
        <table id="ver_usuarios" class="table table-bordered table-striped">
        <h2>Lista de ganadores</h2>
			                <thead>
			                <tr>
                                <th>N</th>
                                <th>Nombre y apellidos</th>
                                <th>Carnet de identidad</th>
                                <th>Numero de Telefono</th>
                                <th>Correo</th>
                                <th>N Factura</th> 
                                <th>Monto Bs</th> 
                                <th>Ciudad</th> 
                                <th>Premio</th>
                                <th>Fecha y hora</th> 
			                </tr>
			                </thead>
			                <tbody>';
                               
			                foreach($ver as $row => $item){
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
			                
			                
			               echo' </tbody>
			                
			            </table>
        
        ';

        

?>
</body>
</html>				