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
        
		 <?php require_once 'panel_global.php'; ?>

        </div>       

        <div class="row">

        	<div class="col-lg-7">
					 <div class="box box-primary">
			            <div class="box-header with-border">
			              <h3 class="box-title">Editar Usuario</h3>
			            </div>
			            <!-- /.box-header -->
			            <!-- form start -->
			            <form role="form" METHOD="POST">

			              <div class="box-body">

			              	<?php $editar_usuario = new usuariosControlador();
			              		  $editar_usuario -> editar_usuario(); ?>

			              	
			                 

			            </div>
						
			              <!-- /.box-body -->
					
			              <div class="box-footer">
			                <button type="submit" id="guardar_editar_usuario" class="btn btn-primary" name="guardar_editar_usuario">Aceptar</button>
			              </div>
							

			            </form>
			          </div>

			          <!-- /.box -->

			          <?php
			          $guardarUsuarioEditado = new usuariosControlador();
			          $guardarUsuarioEditado-> guardar_editar_usuario();
			           ?>

        	</div>
        	<div class="col-lg-5">
        		 <!-- Calendar -->
		          <div class="box box-solid bg-green-gradient">
		            <div class="box-header">
		              <i class="fa fa-calendar"></i>

		              <h3 class="box-title">Calendar</h3>
		              <!-- tools box -->
		              <div class="pull-right box-tools">
		                <!-- button with a dropdown -->
		                <div class="btn-group">
		                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
		                    <i class="fa fa-bars"></i></button>
		                  <ul class="dropdown-menu pull-right" role="menu">
		                    <li><a href="#">Add new event</a></li>
		                    <li><a href="#">Clear events</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#">View calendar</a></li>
		                  </ul>
		                </div>
		                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
		                </button>
		              </div>
		              <!-- /. tools -->
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body no-padding">
		              <!--The calendar -->
		              <div id="calendar" style="width: 100%"></div>
		            </div>
		            <!-- /.box-body -->
		            <div class="box-footer text-black">
		              <div class="row">
		                <div class="col-sm-6">
		                  <!-- Progress bars -->
		                  <div class="clearfix">
		                    <span class="pull-left">Task #1</span>
		                    <small class="pull-right">90%</small>
		                  </div>
		                  <div class="progress xs">
		                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
		                  </div>

		                  <div class="clearfix">
		                    <span class="pull-left">Task #2</span>
		                    <small class="pull-right">70%</small>
		                  </div>
		                  <div class="progress xs">
		                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
		                  </div>
		                </div>
		                <!-- /.col -->
		                <div class="col-sm-6">
		                  <div class="clearfix">
		                    <span class="pull-left">Task #3</span>
		                    <small class="pull-right">60%</small>
		                  </div>
		                  <div class="progress xs">
		                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
		                  </div>

		                  <div class="clearfix">
		                    <span class="pull-left">Task #4</span>
		                    <small class="pull-right">40%</small>
		                  </div>
		                  <div class="progress xs">
		                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
		                  </div>
		                </div>
		                <!-- /.col -->
		              </div>
		              <!-- /.row -->
		            </div>
		          </div>
        	</div>
              
          
        
      	</div>

         

  </section>
  <!-- Contenido principal -->
  
</div>
<!-- Contenido general -->


<?php
include 'vista/modulos/pie.php'; 
 ?>