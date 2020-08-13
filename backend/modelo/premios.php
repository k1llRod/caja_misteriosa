<?php

require_once 'conexion.php';

class premiosModelo{

    public function ver_ganadores(){

        $consulta = conexion::conectar()->prepare("SELECT * 
        FROM participa p LEFT JOIN clientes_concursantes cc ON p.id_cliente = cc.id_cliente 
        LEFT JOIN premios_productos pp ON pp.id_premio = p.id_premio 
        LEFT JOIN ciudad c ON c.id_ciudad = cc.id_ciudad
        WHERE 1 ");

        $consulta -> execute();
        return $consulta -> fetchAll();
        $consulta->close();

    }

    public function nuevo_numero_factura($datosModelo){

        $consulta = conexion::conectar()->prepare("INSERT INTO `registros_habilitados` (`numero_factura`, `estado`, `id_usuario`) 
        VALUES (:numero_factura,'0',:administrador) ");
        $consulta -> bindParam(":numero_factura",$datosModelo['numero_factura'],PDO::PARAM_INT);
        $consulta -> bindParam(":administrador",$datosModelo['administrador'],PDO::PARAM_INT);

        if($consulta ->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $consulta->close();

    }

    public function ver_facturas_habilitadas(){

        $consulta = conexion::conectar()->prepare("SELECT * FROM `registros_habilitados` WHERE 1");

        $consulta -> execute();
        return $consulta -> fetchAll();
        $consulta->close();
    }

}

?>