<?php

	require('../config.php');
	
	$conecction = new mysqli($database_host, $database_user, $database_password, $database_name);
	if ($connection->connect_error) {
   		die("Connection failure: " . $connection->connection_error);
   		echo 'error';
   	}
	else
		//echo 'Conectado';	

 	$info ='SELECT * FROM Convocatorias';
 	$resultado = mysqli_query($conecction, $info);

 	
 	$filas = mysqli_num_rows($resultado);
 	$nombre= array();
 	$i=0;
 	echo "<div class='table-responsive'>
				    <button type='button' id='add_register' class='btn btn-success' onclick='modal_agregar(this)'><span class='fa fa-plus' aria-hidden='true'></span> Agregar</button>
				    <hr>";
 	if($filas > 0) {	
	 	echo "
				    <table class='table table-hover'>
					    <thead class='thead-dark'>
					        <tr>
					            <th scope='col'>ID</th>
					            <th scope='col'>Nombre</th>
					            <th scope='col'>Categoría</th>
					            <th scope='col'>Descripción</th>
					            <th scope='col'>Fecha inicio</th>
					            <th scope='col'>Fecha final</th>
					            <th scope='col'>Convocatoria</th>
					            <th scope='col'>Editar</th>
					            <th scope='col'>Eliminar</th>
					        </tr>
					    </thead>
					    <tbody>";
 		while ($a = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
 			echo"<tr>
						<th scope='row'>".$a['Id']."</th>
						<td>".$a['nombre']."</td>
						<td>".$a['categoria']."</td>
						<td>".$a['descripcion']."</td>
						<td>".$a['fechaInicio']."</td>
						<td>".$a['fechaFin']."</td>
						<td><a href='#' class='btn btn-secondary btn-sm'><i class='fa fa-eye' aria-hidden='true'></i> Ver</a></td>
						<td><button type='button' class='btn btn-primary btn-sm edit' onclick='modal_editar(".$a['Id'].", this)'><span class='fa fa-pencil' aria-hidden='true'></span> Editar</button></td>
						<td><button type='button' class='btn btn-danger btn-sm delate' onclick='eliminar(".$a['Id'].", this)'><span class='fa fa-trash' aria-hidden='true'></span> Eliminar</button></td>	
					</tr>";	
		}
		echo "</tbody>
 			</table>
 		</div>";	
 	} else {
 		echo "No hay registros
 		</div>";
	}

 mysqli_close($connection);
?>	