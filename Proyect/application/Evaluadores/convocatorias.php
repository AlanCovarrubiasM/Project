<?php  
	include_once("../inc/header.php");
?>
	<body onload="cargarConvocatoria()">
	<main class="container-fluid bajar-main">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<p class="title-center">Convocatorias</p>
			</div>
		</div>
			
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<table class="table table-hover table-responsive">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Categoria</th>
				      <th scope="col">Descripcion</th>
				      <th scope="col">Fecha inicio</th>
				      <th scope="col">Fecha final</th>
				    </tr>
				  </thead>
				  <tbody id="Convocatorias">
				  </tbody>
				</table>
			</div>
		</div>
	</main>
</body>
</html>
<?php  
	include_once("../inc/footer.php");
?>