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
     <?php
        $usuario = new usuarioControlador();
     ?>
          

     <div class="row">

         <div class="col-lg-12">
					 <div class="box box-primary">
			            <div class="box-header with-border">
			              <h3 class="box-title">Listado de facturas habilitadas</h3>
                        </div>
                        <div class="btn-group pull-right">
                        
                            </div>

			                   <div class="box-body responsive_tabla">
		            	<table id="ver_usuarios" class="table table-bordered table-striped">
			                <thead>
			                <tr>
			                  <th>N</th>
			                  
                        <th>Nombres</th> 
                        <th>Apellidos</th>
                        <th>CI</th>
                        <th>Cuenta</th>
			                </tr>
			                </thead>
			                <tbody>
                          <?php
                            $usuario-> ver_usuarios();
                          
                          ?> 
			                </tbody>
			                
			            </table>
		            			</div>
			           
			          </div>
			          <!-- /.box -->
						
			       		


        		
        	</div>
       
           
       
     
       </div>

      

</section>
<!-- Contenido principal -->

</div>







<?php
include 'vista/modulos/pie.php'; 
 ?>