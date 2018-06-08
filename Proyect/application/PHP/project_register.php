<?php
	require('config.php');

	$connection = new mysqli($database_host, $database_user, $database_password, $database_name);
	 
	if ($connection->connect_error) {
	   die("Connection failure: " . $connection->connection_error);
	}
	
	$uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["hard_file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "/application/Uploads/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
	
	$id_usuario = $_POST['id_usuario'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$categoria = $_POST['id_categoria'];
	$id_convocatoria = $_POST['id_convocatoria'];
	
	
	$sql = "INSERT INTO Proyectos (id_usuario,nombre,descripcion,id_categoria,documento,id_convocatoria) VALUES ('$id_usuario','$nombre','$descripcion','$categoria','$uploadedFile','$id_convocatoria')";
	
	if ($connection->query($sql) === TRUE) {
	   echo "ok";
	} else {
	   echo "err";
	}
	
	mysqli_close($connection);
?>