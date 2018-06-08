<?php
	include_once("inc/header.php");
?>
	<form class="form-signin" id="formulario-registro">
	    <div class="text-center mb-4">
	        <h1 class="h3 mb-3 font-weight-normal">Registrar</h1>
	    </div>
	    <div class="form-label-group">
		    <label for="nombre" class="hidden">Nombre(s)</label>
	        <input id="nombre" type="text"  placeholder="Nombre(s)" name="nombre" class="form-control" required autofocus>
	    </div>
	    <div class="form-label-group">
		    <label for="apellidoPaterno" class="hidden">Apellido paterno</label>
	        <input id="apellidoPaterno" type="text"  placeholder="Apellido paterno" name="apellidoPaterno" class="form-control" required>
	    </div>
	    <div class="form-label-group">
		    <label for="apellidoMaterno" class="hidden">Apellido materno</label>
	        <input id="apellidoMaterno" type="text"  placeholder="Apellido materno" name="apellidoMaterno" class="form-control" required>
	    </div>
	    <div class="form-label-group">
		    <label for="email" class="hidden">Correo electrónico</label>
	        <input id="email" type="email"  placeholder="Email" name="email" class="form-control" required>
	    </div>
	    <div class="form-label-group">
		    <label for="username" class="hidden">Usuario</label>
	        <input id="username" type="text"  placeholder="Usuario" name="username" class="form-control" required>
	    </div>
	    <div class="form-label-group">
		    <label for="password" class="hidden">Contraseña</label>
	        <input id="password" type="password"  placeholder="Contraseña" name="password" class="form-control" required>
	    </div>
	    <input type="hidden" name="rol" value="3">
	    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="registro_usuario()">Registrar</button>
	</form>

<?php
	include_once("inc/footer.php");
?>
