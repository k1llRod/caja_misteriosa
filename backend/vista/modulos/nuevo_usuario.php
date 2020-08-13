<?php 

 session_start();
  if(!$_SESSION['validar']){
    header('location:ingreso');
    exit();
  }

 ?>

<?php 
  include 'vista/modulos/header.php';
  include 'vista/modulos/menu_izquierdo.php';
 ?>

<div class="content-wrapper">
 
 <section class="content">
          

     <div class="row">

         <div class="col-lg-7">
                  <div class="box box-primary">
                     <div class="box-header with-border">
                       <h3 class="box-title">Nuevo usuario</h3>
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     <form role="form" METHOD="POST">

                       <div class="box-body">

                       <form role="form" METHOD="POST">
			              <div class="box-body">

			              	<div class="form-group has-feedback">
			              		<input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre"  required >
			              		
                              </div>
                              <div class="form-group has-feedback">
			              		<input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido"  required >
			              		
                              </div>
                              <div class="form-group has-feedback">
			              		<input type="text" class="form-control" placeholder="Carnet de identidad" id="ci" name="ci"  required >
			              		
                              </div>
                              <div class="form-group has-feedback">
			              		<input type="text" class="form-control" placeholder="Cuenta" id="usuario" name="usuario"  required >
			              		
                              </div>
                              <div class="form-group has-feedback">
			              		<input type="password" class="form-control" placeholder="Password" id="pass" name="pass"  required >
			              		
			              	</div>

			               

			              <!-- /.box-body -->

			              <div class="box-footer">
			                <button type="submit" id="nuevo_usuario" class="btn btn-primary"name="nuevo_usuario">Guardar registro</button>
			              </div>
							

			            </form>

                           
                          

                     </div>

                     <?php
                        $usuario = new usuarioControlador();
                        $usuario -> nuevo_usuario();
                    ?>
                       <!-- /.box-body -->
                 
                      
                         

                     </form>
                   </div>

                   <!-- /.box -->

                   

         </div>
        

      

</section>
<!-- Contenido principal -->

</div>







<?php
include 'vista/modulos/pie.php'; 
 ?>