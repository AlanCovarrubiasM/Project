	<?php  
		include_once("../inc/header_app.php");
		//session_start();
		//session_destroy();
	?>
	<div class="container-fluid">
	    <div class="row">
	        <?php  
				include_once("../inc/lateral.php");
			?>
	        <div class="col-md-8">
		        <div class="text-center mb-4">
			        <h1 class="h3 mb-3 font-weight-normal" id="titulo_pagina"></h1>
			    </div>
			    <div id="contenido"></div>
	        </div>
	    </div>
	</div>




	<!-- Modal agregar convocatorias -->
	<div class="modal fade" id="modal-agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div id="modal_content"></div>
	        </div>
	    </div>
	</div>
	
	<!-- Modal editar convocatorias -->
	<div class="modal fade" id="modal-editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div id="modal_edit_content"></div>
	        </div>
	    </div>
	</div>
		
<?php
	include_once("../inc/footer_app.php");
?>