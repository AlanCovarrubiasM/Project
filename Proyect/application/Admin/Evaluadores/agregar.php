<div class="modal-body">
	<form class="title-center" id="formulario-agregar">
	    <div class="form-group">
	        <label>Nombre</label>
	        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
	    </div>
	    <div class="form-group">
	        <label>Apellido paterno</label>
	        <input type="text" class="form-control" placeholder="Apellido paterno" name="apellidoPaterno" required>
	    </div>
	    <div class="form-group">
	        <label>Apellido materno</label>
	        <input type="text" class="form-control" placeholder="Apellido materno" name="apellidoMaterno" required>
	    </div>
	    <div class="form-group">
	        <label>Email</label>
	        <input type="email" class="form-control" placeholder="Email" name="email" required>
	    </div>
	    <div class="form-group">
	        <label>Username</label>
	        <input type="text" class="form-control" placeholder="Username" name="username" required>
	    </div>
		<div class="form-group">
	        <label>Password</label>
	        <input type="password" class="form-control" placeholder="Password" name="password" required>
	    </div>
	    <input type="hidden" name="rol" value="2">
	</form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
    <button id="add_button" type="button" class="btn btn-primary" onclick="add_evaluador(this);">Guardar</button>
</div>