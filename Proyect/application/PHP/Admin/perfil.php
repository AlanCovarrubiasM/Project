<?php  
	include_once("inc/header.php");
?>
	<div class="container-marketing" id="contenedor">
		<div class="row">
			<div class="col-sm-12">
				<form class="">
					<div class="form-group row">
						<img  src="../foto/chilaquil.jpg" alt="">
					</div>
					<div class="form-group row">
						<label for="nombre" class="col-sm-2 col-form-label"><strong>Nombre(s):</strong></label>
						<div class="col-sm-10">
							<input type="text" class="form-control-plaintext" placeholder="Nombre(s)" name="nombre" value="Pedro" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label for="apellidoPaterno" class="col-sm-2 col-form-label"><strong>Apellido paterno:</strong></label>
						<div class="col-sm-10">
							<input type="text" class="form-control-plaintext" placeholder="Apellido paterno" name="apellidoPaterno" value="Fernández" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label for="apellidoMaterno" class="col-sm-2 col-form-label"><strong>Apellido materno:</strong></label>
						<div class="col-sm-10">
							<input type="text" class="form-control-plaintext" placeholder="Apellido materno" name="apellidoMaterno" value="Palominos" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label"><strong>Correo electrónico:</strong></label>
						<div class="col-sm-10">
							<input type="email" class="form-control-plaintext" placeholder="Email" name="email" value="pfernandez@ucol.mx" readonly>
						</div>
					</div>
					<center>
						<div class="send-form hidden">
							<button type="button" class="btn btn-danger cancel">Cancelar</button>
							<button type="button" class="btn btn-success save">Guardar cambios</button>
						</div>
						<button type="button" class="btn btn-primary btn-sm">Actualizar información</button>
					</center>
				</form>
				
				
				
			
			</div>
		</div>
	</div>

<?php  
	include_once("inc/footer.php");
?>