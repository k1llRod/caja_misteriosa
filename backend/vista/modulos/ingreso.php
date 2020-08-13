<div class="ingreso" style="background-color: #f5f5f5;"> 
  <form class="form-signin" METHOD="POST" onsubmit="return validarIngreso()">
      <img class="mb-6" src="vista/images/Totto.png" alt="" width="90" height="150">
     
      <label for="inputText" class="sr-only">Usuario</label>
      <input type="text" id="inputText" class="form-control" placeholder="Cuenta de usuario" name="inputText" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="inputPassword"required>
      <?php
      

        $ingreso = new ingresoControlador();
        $ingreso -> ingresoPostControlador();
        
         ?>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar cuenta
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
</div>    
