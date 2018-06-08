<div class="modal-body">
	<form class="title-center">
	    <div class="form-group">
	        <label>Nombre de del proyecto</label>
	        <input type="text" name="nombre" class="form-control">
	    </div>
	    <div class="form-group">
	        <label>Categoria</label>
	        <select name="categoria" class="form-control">
	            <option selected="Categoria">Categoría</option>
	            <option>Matematicas</option>
	            <option>Tecnologías</option>
	        </select>
	    </div>
	    <div class="form-group">
	        <label>Descripción</label>
	        <textarea name="descripcion" rows="10" cols="30"  placeholder="Descripcion" class="form-control"></textarea>
	    </div>
	    <div class="form-group">
	        <label>Fecha de inicio</label>
	        <input type="date" name="fechaInicio" class="form-control">
	    </div>
	    <div>
	        <label>Fecha final</label>
	        <input type="date" name="fechaFin" class="form-control">
	    </div>
	</form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
    <button id="add_button" type="button" class="btn btn-primary" onclick="add_convocatoria(this);">Guardar</button>
</div>