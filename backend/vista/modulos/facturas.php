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
                       <h3 class="box-title">Registrar numero de facturas</h3>
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     <form role="form" METHOD="POST">

                       <div class="box-body">

                       <form role="form" METHOD="POST">
			              <div class="box-body">

			              	<div class="form-group has-feedback">
			              		<input type="text" class="form-control" placeholder="Numero de factura" id="numero_factura" name="numero_factura"  required >
			              		
			              	</div>

			               

			              <!-- /.box-body -->

			              <div class="box-footer">
			                <button type="submit" id="factura" class="btn btn-primary"name="factura">Guardar registro</button>
			              </div>
							

			            </form>

                           
                          

                     </div>

                     <?php
                        $factura = new  premiosControlador();
                        $factura -> nuevo_numero_factura();
                    ?>
                       <!-- /.box-body -->
                 
                      
                         

                     </form>
                   </div>

                   <!-- /.box -->

                   

         </div>
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
			                  
                        <th>Numero de Factura</th> 
                        <th>Estado</th> 
                         
			                </tr>
			                </thead>
			                <tbody>
                          <?php
                            $factura = new  premiosControlador();
                            $factura -> ver_facturas_habilitadas();
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