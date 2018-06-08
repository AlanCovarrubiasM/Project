<?php  
	include_once("inc/header.php");
?>
	<script>
		window.onload = function() {
			cargarEvaluadores();
		}
	</script>
	<div class="container">
		<div class="text-center mb-4">
	        <h1 class="h3 mb-3 font-weight-normal">Evaluadores</h1>
	    </div>
	    <div class="table-responsive">
		    <table class="table table-hover">
			    <thead class="thead-dark">
			        <tr>
			            <th scope="col">Id</th>
						<th scope="col">Nombre</th>
						<th scope="col">Apellido paterno</th>
						<th scope="col">Apellido materno</th>
						<th scope="col">Email</th>
			        </tr>
			    </thead>
			    <tbody id="Evaluadores"></tbody>
			</table>
	    </div>
	</div>

<?php  
	include_once("inc/footer.php");
?>