<?php
	include_once("../inc/header.php");
?>
<body>
	<main class="container-fluid bajar-main">
		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-3">
				<a href="<?php echo $Base_url; ?>"><button type="button" class="btn btn-info title-center">Participantes</button></a>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
				<a href="<?php echo $Base_url; ?>"><button type="button" class="btn btn-info title-center">Usuarios</button></a>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
			<a href="<?php echo $Base_url; ?>Project/Admin/convocatorias.php"><button type="button" class="btn btn-info title-center">Convocatoria</button></a>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
				<a href="<?php echo $Base_url; ?>Project/Admin/evaluadores.php"><button type="button" class="btn btn-info title-center">Evaluadores</button></a>
			</div>
		</div>
	</main>
	
	
</body>
</html>
<?php
	include_once("../inc/footer.php");
?>