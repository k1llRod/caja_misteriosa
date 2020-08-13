
<div class="text-center">
    <div class="position-relative overflow-hidden p-2 p-md-1 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-2 mx-auto">
            <a href="index.php"><img class="d-block mx-auto mb-4" src="vista/images/pagina/Totto.png" alt="" width="72" height="102"></a>
            <form METHOD="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres y apellidos">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de identidad">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Numero de telefono">
                </div>    
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="factura" name="factura" placeholder="Numero de factura">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="monto" name="monto" placeholder="Monto en Bs">
                </div>
                <div class="form-group">
                    <select id="ciudad" class="form-control" name="ciudad">
                        <option selected>Ciudad</option>
                        <option value="1">La Paz</option>
                        <option value="2">Oruro</option>
                        <option value="3">Potosi</option>
                        <option value="4">Cochabamba</option>
                        <option value="5">Santa Cruz</option>
                        <option value="6">Tarija</option>
                        <option value="7">Sucre</option>
                        <option value="8">Beni</option>
                        <option value="9">Pando</option>

                    </select>
                </div>
                

                
               
                    <button type="submit" class="btn btn-outline-secondary" name="registrar" value="Registrar">Registrar</button>
                </form>
            
            
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    
  </div>

  <?php
    $concursar = new concursarControlador();
    $concursar -> concursar();
  ?>