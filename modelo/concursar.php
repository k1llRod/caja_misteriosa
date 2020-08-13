<?php

require_once 'conexion.php';

class concursarModelo{

    public function concursar_verificar($datosModelo){

        $consulta = conexion::conectar()->prepare("SELECT * FROM registros_habilitados WHERE numero_factura=:factura AND estado='0'");
        $consulta -> bindParam(":factura",$datosModelo['factura'],PDO::PARAM_INT);

        $consulta -> execute();
        return $consulta -> fetch();
        $consulta->close();

    }

   

    public function concursar($datosModelo){
            $idCliente = 0;
            $pdo = conexion::conectar();
            $registro = $pdo->prepare("INSERT INTO `clientes_concursantes`(`ci`, `nombres`, `telefono`, `correo`, `numero_factura`, `monto`, `id_ciudad`) 
            VALUES (:ci,:nombres,:telefono,:email,:numero_factura,:monto,:id_ciudad)");
            $registro -> bindParam(":ci",$datosModelo['ci'],PDO::PARAM_INT);
            $registro -> bindParam(":nombres",$datosModelo['nombres'],PDO::PARAM_STR);
            $registro -> bindParam(":telefono",$datosModelo['telefono'],PDO::PARAM_INT);
            $registro -> bindParam(":email",$datosModelo['email'],PDO::PARAM_STR);
            $registro -> bindParam(":numero_factura",$datosModelo['factura'],PDO::PARAM_INT);
            $registro -> bindParam(":monto",$datosModelo['monto'],PDO::PARAM_INT);
            $registro -> bindParam(":id_ciudad",$datosModelo['ciudad'],PDO::PARAM_INT);


            if($registro->execute()){

                $idCliente = $pdo->lastInsertId();
                //return 'ok';
                $idpremio = $pdo->prepare("SELECT id_premio,descripcion FROM `premios_productos` WHERE 1 ORDER BY RAND() LIMIT 1 ");
                $idpremio->execute();
                $id = $idpremio->fetchAll();
                foreach($id as $row => $item){
                    $premio = $item['id_premio'];
                    $descripcion = $item['descripcion'];
                    
                }
                $registro_participo = $pdo->prepare("INSERT INTO `participa`(`fecha`, `hora`, `id_cliente`, `id_premio`) 
                VALUES (NOW(),NOW(),:idCliente,:premio)");

                $registro_participo ->  bindParam(":idCliente",$idCliente,PDO::PARAM_INT);
                $registro_participo ->  bindParam(":premio",$premio,PDO::PARAM_INT);

                $factura_registro=$pdo->prepare("UPDATE `registros_habilitados` 
                SET `estado`='1' WHERE numero_factura=:factura");
                $factura_registro -> bindParam(":factura",$datosModelo['factura'],PDO::PARAM_INT);
                $factura_registro->execute();

                if($registro_participo->execute()){
                    return $descripcion;
                }else{
                    return 'error';
                }
              
                $registro_participo->close();
                
                

            }else{
                return 'error';
            }   
    }

    
}

?>