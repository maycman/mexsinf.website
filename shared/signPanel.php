<?php include_once("analyticstracking.php") ?>
<div class="container">
  <br/>
  <br/>
  <br/>
  <br/>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form class="form-signin" method="post" action="index.php?page=postpanel">
				<h2 class="form-signin-heading">¡Bienvenido! Logueate</h2>
        		<label for="inputUser" class="sr-only">Usuario de acceso</label>
        		<input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Username" required="" autofocus="">
        		<br/>
        		<label for="inputPassword" class="sr-only">Contraseña</label>
        		<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="">
        		<br/>
        		<div class="checkbox">
        			<label>
            			<input name="hoyo" id="hoyo" type="checkbox" value="remember-me"> Recordar acceso
            		</label>
        		</div>
        		<br/>
        		<button name="boton" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    		</form>
    	</div>
    </div>
</div>
<div class="container">
  <br/>
  <br/>
  <br/>
  <br/>
</div>