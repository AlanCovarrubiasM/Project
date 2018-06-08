<?php
	require('../../inc/config.php');
	require('../config.php');
	
	$conecction = new mysqli($database_host, $database_user, $database_password, $database_name);
	if ($connection->connect_error) {
   		die("Connection failure: " . $connection->connection_error);
   		echo 'error';
   	}
	else
		//echo 'Conectado';	

 	$info ='SELECT * FROM Proyectos';
 	$resultado = mysqli_query($conecction, $info);

 	
 	$filas = mysqli_num_rows($resultado);
 	$nombre= array();
 	$i=0;
	echo "<div class='table-responsive'>
				    <hr>";
  	if($filas > 0) {	
	 	echo "
				    <table class='table table-hover'>
					    <thead class='thead-dark'>
					        <tr>
					            <th scope='col'>ID</th>
					            <th scope='col'>Nombre</th>
					            <th scope='col'>Participante</th>
					            <th scope='col'>Descripción</th>
					            <th scope='col'>Categoría</th>
					            <th scope='col'>Proyecto</th>
					            <th scope='col'>Eliminar</th>
					        </tr>
						</thead>
					<tbody>";
 		while ($a = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
	 		header("Content-type: application/pdf");
 			echo"<tr>
						<th scope='row'>".$a['Id']."</th>
						<td>".$a['nombre']."</td>
						<td>".$a['participante']."</td>
						<td>".$a['descripcion']."</td>
						<td>".$a['categoria']."</td>
						<td><a href='#' class='btn btn-secondary btn-sm'><i class='fa fa-eye' aria-hidden='true'></i> Ver</a><td>
						<button type='button' class='btn btn-danger btn-sm delate' onclick='eliminar(".$a['Id'].", this)'><span class='fa fa-trash' aria-hidden='true'></span> Eliminar</button>
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