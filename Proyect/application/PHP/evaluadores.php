<?php

	require('config.php');
	
	$conecction = new mysqli($database_host, $database_user, $database_password, $database_name);
	if ($connection->connect_error) {
   		die("Connection failure: " . $connection->connection_error);
   		echo 'error';
   	}
		//echo 'Conectado';	

 	$info ='SELECT * FROM Evaluadores';
 	$resultado = mysqli_query($conecction, $info);

 	

 	$filas = mysqli_num_rows($resultado);
 	$nombre= array();
 	$i=0;
 	if($filas > 0)
 	{	
 		while ($a = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
 			
 			echo"<tr>
				      <th scope='row'>".$a['Id']."</th>
				      <td>".$a['nombre']."</td>
				      <td>".$a['apellidoPaterno']."</td>
				      <td>".$a['apellidoMaterno']."</td>
				      <td>".$a['email']."</td>
				    </tr>";	
		}	
 	}
	else{
 		echo "no";
	}

 mysqli_close($connection);
 
?>	