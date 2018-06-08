<?php
if(!isset($_SESSION)) {
	session_start();
}

require('config.php');

$username = $_POST['username'];
$password = $_POST['password'];


if (isset($username) && isset($password)) {
  $connection = new mysqli($database_host, $database_user, $database_password, $database_name);

  if ($connection->connect_error) {
    die("Connection failure: " . $connection->connect_error);
  }

  $statement = "select * from User where username = '$username'";
  $result = $connection->query($statement);
//session_destroy();
//var_dump($result->num_rows);
  if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if (hash('sha256', $password) === $row['password']) {
		$_SESSION['logged'] = true;
		$_SESSION['username'] = $username;
		$_SESSION["user_id"] = $row['id'];
		$_SESSION["user_rol"] = $row['rol'];
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
	  
		//var_dump($_SESSION['user_rol']);
		if($row['rol']==1){
			header('Location: /application/Admin/');
		} else if($row['rol']==2) {
			header('Location: /application/Evaluadores/');
		} else {
			header('Location: /application/User/');
		}
		

     
    } else {
	   header('Location: /application/login.php');
       echo "<script> alert('Credenciales incorrectas.') </script>";
       session_destroy();
    }
  } else {
	  header('Location: /application/login.php');
      echo "<script> alert('Usuario no registrado') </script>";
      session_destroy();
      
    }

  mysqli_close($connection);
}

?>