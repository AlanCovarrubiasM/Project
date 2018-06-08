<?php
	include_once("../inc/header.php")
?>
<body onload="cargarEvaludoresAdmin()">
	<main class="container-fluid bajar-main">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<p class="title-center">Evaluadores</p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
  				Agregar</button>

				<!-- Modal -->
				<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
				        <button type="button" 	class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="title-center">
				        	<div class="form-group">
				        		<label>Nombre</label>
				        		<p><span class="fa fa-user"></span><input type="text"  Placeholder="Nombre" name="nombre" required></p>
				        	</div>
				        	<div class="form-group">
				        		<label>Apellido paterno</label>
				        		<p><span class="fa fa-user"></span><input type="text"  Placeholder="Apellido paterno" name="apellidoPaterno" required></p>
				        	</div>
				        	<div class="form-group">
				        		<label>Apellido materno</label>
				        		<p><span class="fa fa-user"></span><input type="text"  Placeholder="Apellido materno" name="apellidoMaterno" required></p>
				        	</div>
				        	<div class="form-group">
				        		<label>Email</label>
				        		<p><span class="fa fa-user"></span><input type="email"  Placeholder="Email" name="email" required></p>
				        	</div>
				        	<div class="form-group">
				        		<label>Username</label>
				        		<p><span class="fa fa-user"></span><input type="text"  Placeholder="Username" name="username" required></p>
				        	</div>
				        	<div class="form-group">
				        		<label>Password</label>
				        		<p><span class="fa fa-user"></span><input type="password"  Placeholder="Password" name="password" required></p>
				        	</div>
							<div class="modal-footer form-group">
				        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        		<button type="button" class="btn btn-primary" onclick="enviarEvauladores();">Guardar</button>
				      		</div>
						</form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<table class="table table-hover table-responsive">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Apellido paterno</th>
				      <th scope="col">Apellido materno</th>
				      <th scope="col">Email</th>
				      <th scope="col">Editar</th>
				      <th scope="col">Eliminar</th>
				    </tr>
				  </thead>
				  <tbody id="EvaluadoresAdmin">
				 
				  </tbody>
				</table>
				<!-- Modal editar-->
				<div class="modal fade" id="modal-editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="title-center">
				        	<div class="form-group">
				        		<label>Nombre de del proyecto</label>
								<input type="text" name="nombre">
				        	</div>
				        	<div class="form-grup">
				        		<label>Categoria</label>
								<select name="categoria">
									<option selected="Categoria">Categoría</option>
									<option>Matematicas</option>
									<option>Tecnologías</option>
								</select>
				        	</div>
				        	<div class="form-group">
				        		<label>Descripción</label>
								<textarea name="descripcion" rows="10" cols="30"  placeholder="Descripcion"></textarea>
				        	</div>
							<div class="modal-footer form-group">
				        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        		<button type="button" class="btn btn-primary" onclick="enviarEvaluadores();">Guardar</button>
				      		</div>
						</form>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- End Modal editar -->
			</div>
		</div>
	</main>
</body>
</html>
<?php
	include_once("../inc/footer.php");
?>