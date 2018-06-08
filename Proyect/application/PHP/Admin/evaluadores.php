<?php

	require('../config.php');
	//session_start();
	$conecction = new mysqli($database_host, $database_user, $database_password, $database_name);
	if ($connection->connect_error) {
   		die("Connection failure: " . $connection->connection_error);
   		echo 'error';
   	}
	else
		//echo 'Conectado';	

 	$info ='SELECT * FROM User WHERE rol=2';
 	$resultado = mysqli_query($conecction, $info);

 	
 	$filas = mysqli_num_rows($resultado);
 	$nombre= array();
 	$i=0;
 	if($filas > 0){	
	 	echo "<div class='table-responsive'>
				    <button type='button' id='add_register' class='btn btn-success' onclick='modal_agregar(this)'><span class='fa fa-plus' aria-hidden='true'></span> Agregar</button>
				    <hr>
				    <table class='table table-hover'>
					    <thead class='thead-dark'>
					        <tr>
					            <th scope='col'>Id</th>
								<th scope='col'>Nombre</th>
								<th scope='col'>Apellido paterno</th>
								<th scope='col'>Apellido materno</th>
								<th scope='col'>Email</th>
								<th scope='col'>Editar</th>
								<th scope='col'>Eliminar</th>
					        </tr>
					    </thead>
					    <tbody>";
 		while ($a = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
 			echo"<tr>
						<th scope='row'>".$a['Id']."</th>
						<td>".$a['nombre']."</td>
						<td>".$a['apellidoPaterno']."</td>
						<td>".$a['apellidoMaterno']."</td>
						<td>".$a['email']."</td>
						<td><button type='button' class='btn btn-primary btn-sm edit' onclick='modal_editar(".$a['Id'].", this)'><span class='fa fa-pencil' aria-hidden='true'></span> Editar</button></td>
						<td><button type='button' class='btn btn-danger btn-sm delate' onclick='eliminar(".$a['Id'].", this)'><span class='fa fa-trash' aria-hidden='true'></span> Eliminar</button></td>	
					</tr>";	
		}
		echo "</tbody>
 			</table>
 		</div>";	
	} else{
 		echo "no";
	}

 mysqli_close($connection);
?>	