<?php
	require('../config.php');
	if(!isset($_SESSION)) {
		session_start();
	}
	
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
 	$i=6;
 	echo "<div class='row'>";
 	if($filas > 0) {
 		while ($a = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
 			echo"<div class='col-md-4' style='margin-bottom: 30px;'>
 					<div class='card' id='".$a['Id']."'>
 						<div class='card-img'>
 							<!--img class='card-img-top' src='https://lorempixel.com/output/technics-q-c-720-400-3.jpg' alt='".$a['nombre']."'-->
 							<svg width='286' height='180' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 286 180' preserveAspectRatio='none'><defs><style type='text/css'>#holder_163dfd4ac71 text { fill:rgba(255,255,255,.75);font-weight:normal;font-family:Helvetica, monospace;font-size:14pt } </style></defs><g id='holder_163dfd4ac71'><rect width='286' height='180' fill='#777'></rect><g><text x='107.203125' y='96.3'>286x180</text></g></g></svg>
 							<span class='categoria'>".$a['categoria']."</span>
 							<span class='inscrito hidden'>INSCRITO</span>
 						</div>
 						<div class='card-body'>
						    <h5 class='card-title'>".$a['nombre']."</h5>
						    <p class='card-text'>".$a['descripcion']."</p>
						    <span>Inicia: <small>".$a['fechaInicio']."</small></span><br>
						    <span>Termina: <small>".$a['fechaFin']."</small></span>
							    <a href='#' class='btn btn-success btn-sm btn-block ver_conv' data-toggle='modal' data-target='#registro_convocatoria_".$a['Id']."'>Ver convocatoria</a>
							    <a href='#' class='btn btn-primary btn-sm btn-block project hidden' data-toggle='modal' data-target='#registro_proyecto_".$a['Id']."'>Agregar proyecto</a>
						</div>
					</div>
 				</div>
 				<div class='modal fade' id='registro_convocatoria_".$a['Id']."' tabindex='-1' role='dialog' aria-labelledby='registro_convocatoria_".$a['Id']."' aria-hidden='true'>
				    <div class='modal-dialog' role='document'>
				        <div class='modal-content'>
				            <div class='modal-header'>
				                <h5 class='modal-title'>".$a['nombre']."</h5>
				                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				                <span aria-hidden='true'>&times;</span>
				                </button>
				            </div>
				            <div class='modal-body'>
				            	<div class='desc_conv'>".$a['categoria']." <small>".$a['fechaInicio']." - ".$a['fechaFin']."</small></div>
				            	<div class='desc_conv'>".$a['descripcion']."</div>
				            </div>
				            <div class='modal-footer'>
				                <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Cerrar</button>
				                <button type='button' class='btn btn-primary btn-sm' onclick='registro_convocatoria(".$a['Id'].",".$_SESSION['user_id'].")'>Registrarme</button>
				            </div>
				        </div>
				    </div>
				</div>
				<div class='modal fade' id='registro_proyecto_".$a['Id']."' tabindex='-1' role='dialog' aria-labelledby='registro_proyecto_".$a['Id']."' aria-hidden='true'>
				    <div class='modal-dialog' role='document'>
				        <div class='modal-content'>
				            <div class='modal-header'>
				                <h5 class='modal-title'>Agregar proyecto</h5>
				                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				                <span aria-hidden='true'>&times;</span>
				                </button>
				            </div>
					        <div class='modal-body'>
					            	<form class='title-center' id='add-proyecto' enctype='multipart/form-data'>
				            			<p class='statusMsg'></p>
									<input type='hidden' name='id_usuario' value='".$_SESSION['user_id']."'>
									<input type='hidden' name='id_categoria' value='".$a['categoria']."'>
								    <div class='form-group'>
								        <label for='nombre'>Nombre del proyecto</label>
								        <input id='nombre' type='text' name='nombre' class='form-control' placeholder='Nombre del proyecto'>
								    </div>
								    <div class='form-group'>
								        <label for='descripcion'>Descripción</label>
								        <textarea id='descripcion' rows='3' name='descripcion' class='form-control' placeholder='Escribir descripción del proyecto'></textarea>
								    </div>
									<div class='form-group'>
									    <label for='docProyecto'>Cargar documento</label>
									    <input type='file' class='form-control-file' id='file' name='file'>
									</div>
									<input type='hidden' name='id_convocatoria' value='".$a['Id']."'>
								</form>
							</div>
				            <div class='modal-footer'>
				                <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Cerrar</button>
				                <button type='button' class='btn btn-primary btn-sm submitBtn' onclick='registro_proyecto()'>Guardar</button>
				            </div>
				        </div>
				    </div>
				</div>";
		}
		echo "</div>";
 	} else {
 		echo "No hay convocatorias registradas
 		</div>";
	}

 mysqli_close($connection);
?>	