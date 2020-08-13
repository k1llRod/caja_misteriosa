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
 
 	<section class="content-header">
 		<h1>
 			Registro de ganadores
 			<small>Listado</small>
 		</h1>
 		<ol class="breadcrumb">
	        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
	        <li><a href="#">Activos</a></li>
	        <li class="active">Ver activos</li>
     	 </ol>
 	</section>

    <section class="content">
        <div class="row">
        
		 

        </div>       

        <div class="row">
        <?php $registro = new premiosControlador();  ?>

        	<div class="col-lg-12">
					 <div class="box box-primary">
			            <div class="box-header with-border">
			              <h3 class="box-title">Listado de ganadores</h3>
                        </div>
                        <div class="btn-group pull-right">
                        <form action="vista/modulos/export_data.php" method="post">
                            <button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
                        </form>
                            </div>

			                   <div class="box-body responsive_tabla">
		            	<table id="ver_usuarios" class="table table-bordered table-striped">
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
			                <tbody>
                                <?php 
                                    $registro->ver_ganadores();
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