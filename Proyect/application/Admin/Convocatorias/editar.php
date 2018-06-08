<?php
	require("../../PHP/config.php");
	$connection = new mysqli($database_host, $database_user, $database_password, $database_name);
	if ($connection->connect_error) {
		die("Connection failure: " . $connection->connection_error);
		echo 'error';
	}
	$id_usuario = $_POST['id_usuario'];
	$sql = "SELECT * FROM Convocatorias WHERE id=".$id_usuario;
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	
	
	echo '<div class="modal-body">
				<form class="title-center" id="formulario-editar">
				    <div class="form-group">
				        <label>Nombre de del proyecto</label>
				        <input type="text" name="nombre" class="form-control" value="'.$row["nombre"].'">
				    </div>
				    <div class="form-group">
				        <label>Categoría</label>
				        <select id="categoria" name="categoria" class="form-control" value="'.$row["categoria"].'">
				            <option value="0">Categoría</option>
				            <option value="1">Matematicas</option>
				            <option value="2">Tecnología</option>
				        </select>
				    </div>
				    <div class="form-group">
				        <label>Descripción</label>
				        <textarea name="descripcion" rows="10" cols="30" placeholder="Descripcion" class="form-control">'.$row["descripcion"].'</textarea>
				    </div>
				    <div class="form-group">
				        <label>Fecha de inicio</label>
				        <input type="date" name="fechaInicio" class="form-control" value="'.$row["fechaInicio"].'">
				    </div>
				    <div class="form">
				        <label>Fecha final</label>
				        <input type="date" name="fechaFin" class="form-control" value="'.$row["fechaFin"].'">
				    </div>
				</form>
			</div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		        <button id="edit_button" type="button" class="btn btn-primary" onclick="edit_convocatoria(6,this);">Guardar</button>
		    </div>';
	        
	    }
	} else {
	    echo "0 results";
	}
	$connection->close();
	?>