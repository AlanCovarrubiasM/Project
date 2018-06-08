<?php
	include_once("inc/header.php");
?>
	<form method="post" action="<?php echo $Base_url; ?>PHP/login.php" class="form-signin">
		<div class="text-center mb-4">
	        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
	    </div>
	    <div class="form-label-group">
		    <label for="Username" class="hidden">Usuario</label>
	        <input type="text"  Placeholder="Username" name="username" class="form-control" required autofocus>
	    </div>
	    <div class="form-label-group">
		    <label for="password" class="hidden">Contraseña</label>
	        <input type="password"  Placeholder="*********" name="password" class="form-control" required>
	    </div>
	    <div class="form-label-group">
		    <button type="submit" class="btn btn-lg btn-primary btn-block" type="button">Entrar</button>
	    </div>
    </form>

<?php
	include_once("inc/footer.php");
?>
