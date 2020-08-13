<?php
require_once 'conexion.php';

class usuarioModelo{

    public function nuevo_usuario($datosModelo){

        $consulta = conexion::conectar()->prepare("INSERT INTO `usuarios` ( `nombre`, `apellido`, `ci`, `usuario`, `pass`) 
        VALUES (:nombre,:apellido,:ci,:usuario,:pass) ");
        $consulta -> bindParam(":nombre",$datosModelo['nombre'],PDO::PARAM_STR);
        $consulta -> bindParam(":apellido",$datosModelo['apellido'],PDO::PARAM_STR);
        $consulta -> bindParam(":ci",$datosModelo['ci'],PDO::PARAM_INT);
        $consulta -> bindParam(":usuario",$datosModelo['usuario'],PDO::PARAM_STR);
        $consulta -> bindParam(":pass",$datosModelo['pass'],PDO::PARAM_STR);
        

        if($consulta -> execute()){

            return "funciona";

        }else{

            return "error";
        }
        
        $consulta->close();



    }

    public function ver_usuarios(){

        $consulta = conexion::conectar()->prepare("SELECT * FROM usuarios");

        $consulta->execute();
        return $consulta->fetchAll();
        $consulta->close();
    }
}

?>