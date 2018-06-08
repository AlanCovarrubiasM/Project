<?php
		if(!isset($_SESSION)) {
			session_destroy();
		}
		   
       echo "<p>Volver al <a href='/application/login.php'>login</a></div>";
       session_destroy();

?>