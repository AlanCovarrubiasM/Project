<?php

	require('../config.php');
	session_start();
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
				    <hr>
				    <table class='table table-hover'>
					    <thead class='thead-dark'>
					        <tr>
					            <th scope='col'>Id</th>
								<th scope='col'>Nombre</th>
								<th scope='col'>Apellido paterno</th>
								<th scope='col'>Apellido materno</th>
								<th scope='col'>Email</th>
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