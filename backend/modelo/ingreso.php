<?php
require_once 'conexion.php';

class ingresoModelo{
  public function ingresoPostModelo($varControlador){
  	
    $consulta = conexion::conectar()->prepare('SELECT * FROM `usuarios` WHERE usuario=:usuario AND pass=:password');
    $consulta->bindParam(':usuario',$varControlador['usuario']);
    $consulta->bindParam(':password',$varControlador['password']);
    $consulta->execute();
    return $consulta->fetch();
    $consulta->close();

  }

}
 ?>


