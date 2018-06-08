<?php
    include_once("config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>
        <!--css-->
        <link rel="stylesheet" type="text/css" href="<?php echo $Base_url; ?>css/app.css">
        <link rel="stylesheet" type="text/css" href=" <?php echo $Base_url; ?>Libraries/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $Base_url; ?>icons/styles.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!--Css-->
        <!--Meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--Meta-->
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
	                <li class='nav-item'><a class='nav-link' href='<?php echo $Base_url; ?>../'>Inicio</a></li>
                		<li class='nav-item'><a class='nav-link' href='<?php echo $Base_url; ?>index-register.php'>Registro</a></li>
                		<li class='nav-item'><a class='nav-link' href='<?php echo $Base_url; ?>index-convocatorias.php'>Convocatorias</a></li>
                		<li class='nav-item'><a class='nav-link' href='<?php echo $Base_url; ?>index-evaluadores.php'>Evaluadores</a></li>
                		<li class='nav-item'><a class='nav-link' href='#'>Acerca de...</a></li>
                		<li class='nav-item'><a class='nav-link' href='<?php echo $Base_url; ?>login.php'>Entrar</a></li>
                </ul>
            </div>
        </nav>