var path = window.location.pathname;
var pathName = path.substring(0, path.lastIndexOf('/') + 1);
var pathArrayUrl = pathName.split( '/' );
var divContenido = document.getElementById('contenido');

//Administrador
function loadPage(url) {
	var pagina = url.getAttribute('pagina');
	var titulo = url.text;
	$.ajax({
		url: base_url + 'PHP/'+pathArrayUrl[2]+'/'+pagina+'.php',
		data: {
			
        },
        cache: false,
        type: 'get',
        beforeSend: function() {

        },
        success: function(data) {
	        titulo_pagina.innerHTML = titulo;
		    divContenido.innerHTML = data;
		    var add_register = document.getElementById('add_register');
		    if( add_register!=null ){
			    add_register.setAttribute('pagina', pagina);
		    }
			var btn_delete = document.querySelectorAll('.delate');
			var btn_edit = document.querySelectorAll('.edit');
			var btn_califica = document.querySelectorAll('.califica');
			for (var i = 0; i < btn_delete.length; i++) {
			    btn_delete[i].setAttribute('pagina', pagina);
			}
			for (var i = 0; i < btn_edit.length; i++) {
			    btn_edit[i].setAttribute('pagina', pagina);
			}
			for (var i = 0; i < btn_califica.length; i++) {
			    btn_califica[i].setAttribute('pagina', pagina);
			}
			
			$.ajax({
				url: base_url + 'PHP/User/jsonConvUser.php',
				data: {
					
		        },
		        cache: false,
		        type: 'get',
		        beforeSend: function() {
		
		        },
		        success: function(data) {
			        var obj = JSON.parse(data);
			        if(obj !== null){
						for (i=0;i<obj.length;i++){
							var id_convocatoria = obj[i].id_convocatoria;
							var ban_conv = $( '.card[id*="'+id_convocatoria+'"]' )[0];
							$('#contenido').find(ban_conv).addClass('active');
						}
					}
		        }
		    });
    
        }
    });
}

//Evaluadores
function loadPageEvaluadores(url) {
	var pagina = url.getAttribute('pagina');
	var titulo = url.text;
	var titulo_pagina = document.getElementById('titulo_pagina');
	$.ajax({
		url: base_url + 'PHP/'+pagina+'.php',
		data: {
			
        },
        cache: false,
        type: 'get',
        beforeSend: function() {

        },
        success: function(data) {
	        titulo_pagina.innerHTML = titulo;
		    divContenido.innerHTML = data;
		    var deleteItem = document.getElementById('delate');
		    if( deleteItem!=null ){
			    deleteItem.setAttribute('pagina', titulo);
		    }
        }
    });
}


//Elimnar
function eliminar(id_, url) {
	var pagina = url.getAttribute('pagina');
	var urlPagina = document.querySelectorAll('[pagina="'+pagina+'"]')[0];
	$.ajax({
		type : 'post',
		url : base_url + 'PHP/Admin/eliminar.php',
		data : {
			number: id_,
			tabla: pagina
		},
		beforeSend: function(){
			
		},
		success: function(respuesta){
			loadPage(urlPagina);
		}
	})
}


function modal_agregar(url){
	var pagina = url.getAttribute('pagina');
	var modal_content = document.getElementById('modal_content');
	$.ajax({
		type : 'post',
		url : base_url + 'Admin/'+pagina+'/agregar.php',
		data : {
			
		},
		beforeSend:function(){	

		},
		success:function(data){
			modal_content.innerHTML = data;
			document.getElementById('add_button').setAttribute('pagina', pagina);
			$('#modal-agregar').modal('show');
		}
	});
}

function modal_editar(id,url){
	var pagina = url.getAttribute('pagina');
	var modal_content = document.getElementById('modal_edit_content');
	$.ajax({
		type : 'post',
		url : base_url + 'Admin/'+pagina+'/editar.php',
		data : {
			id_usuario: id
		},
		beforeSend:function(){	

		},
		success:function(data){
			modal_content.innerHTML = data;
			document.getElementById('edit_button').setAttribute('pagina', pagina);
			var categoria = document.getElementById('categoria');
			if(categoria!=null) {
				var selected_opt = categoria.getAttribute('value');
				$('#categoria').prop('selectedIndex',selected_opt);
			}
			$('#modal-editar').modal('show');
		}
	});
}

function edit_convocatoria(id_, url) {
	var pagina = url.getAttribute('pagina');
	var urlPagina = document.querySelectorAll('[pagina="'+pagina+'"]')[0];
	var formData = $("#formulario-editar").serialize();
	$.ajax({
	    type: 'post',
	    url: base_url + 'PHP/Admin/editar.php',
	    data: formData,
	    beforeSend: function() {

        },
		success: function(data) {
			alert(data);
			document.getElementById("formulario-editar").reset();
		}
	});
}

function add_convocatoria(url){
	var pagina = url.getAttribute('pagina');
	var urlPagina = document.querySelectorAll('[pagina="'+pagina+'"]')[0];
	var _nombre = document.getElementsByName('nombre')[0].value;
	var _categoria = document.getElementsByName('categoria')[0].value;
	var _descripcion = document.getElementsByName('descripcion')[0].value;
	var _fechaInicio = document.getElementsByName('fechaInicio')[0].value;
	var _fechaFin = document.getElementsByName('fechaFin')[0].value;

	$.ajax({
		type : 'post',
		url : base_url + 'PHP/Admin/agregarConvocatorias.php',
		data : {
			nombre : _nombre,
			categoria : _categoria,
			descripcion : _descripcion,
			fechaInicio : _fechaInicio,
			fechaFin : _fechaFin
		},
		beforeSend:function(){	

		},
		success:function(respuesta){
			loadPage(urlPagina);
			$('#modal-agregar').modal('hide');
		}
	});
}

function add_evaluador(url) {
	var pagina = url.getAttribute('pagina');
	var urlPagina = document.querySelectorAll('[pagina="'+pagina+'"]')[0];
	var formData = $("#formulario-agregar").serialize();
	$.ajax({
	    type: 'post',
	    url: base_url + 'PHP/register.php',
	    data: formData,
	    beforeSend: function() {

        },
		success: function(data) {
			document.getElementById("formulario-agregar").reset();
			$('#modal-agregar').modal('hide');
			loadPage(urlPagina);
		}
	});
}



function registro_usuario() {
	var formData = $("#formulario-registro").serialize();
	$.ajax({
	    type: 'post',
	    url: base_url + 'PHP/register.php',
	    data: formData,
	    beforeSend: function() {

        },
		success: function(data) {
			alert(data);
			document.getElementById("formulario-registro").reset();
		}
	});
}

function modal_calificar(url){
	var pagina = url.getAttribute('pagina');
	var modal_content = document.getElementById('modal_content');
	$.ajax({
		type : 'post',
		url : base_url + 'Admin/'+pagina+'/agregar.php',
		data : {
			
		},
		beforeSend:function(){	

		},
		success:function(data){
			modal_content.innerHTML = data;
			document.getElementById('add_button').setAttribute('pagina', pagina);
			$('#modal-agregar').modal('show');
		}
	});
}


function registro_convocatoria(id_convocatoria,id_usuario){
	$.ajax({
		type : 'post',
		url : base_url + 'PHP/conv_register.php',
		data : {
			id_convocatoria: id_convocatoria,
			id_usuario: id_usuario
		},
		beforeSend:function(){	

		},
		success:function(data){
			console.log(data);
		}
	});
}

/*
    $("#add-proyecto").submit( function(e){
	    e.preventDefault();*/
	function registro_proyecto(){
		var formData = $("#add-proyecto").serialize();
	    $.ajax({
	        type: 'post',
	        url: base_url + 'PHP/project_register.php',
	        data: formData,
	        beforeSend: function(){
	            $('.submitBtn').attr("disabled","disabled");
	            $('#add-proyecto').css("opacity",".5");
	        },
	        success: function(data){
	            $('.statusMsg').html('');
	            if(data == 'ok'){
	                $('#add-proyecto')[0].reset();
	                $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form data submitted successfully.</span>');
	            }else{
	                $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
	            }
	            $('#add-proyecto').css("opacity","");
	            $(".submitBtn").removeAttr("disabled");
	        }
	    });
	}
$(document).ready(function(e){	
	//file type validation
    $("#file").click(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#file").val('');
            return false;
        }
    });
});