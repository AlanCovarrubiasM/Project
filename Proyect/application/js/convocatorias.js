function enviarConvocatorias(){
	var _nombre = document.getElementsByName('nombre')[0].value
	var _categoria = document.getElementsByName('categoria')[0].value
	var	_descripcion = document.getElementsByName('descripcion')[0].value
	var _fechaInicio = document.getElementsByName('fechaInicio')[0].value
	var _fechaFin = document.getElementsByName('fechaFin')[0].value
	console.log(_nombre)
	console.log(_categoria)
	console.log(_descripcion)
	console.log(_fechaInicio)
	console.log(_fechaFin)

	$.ajax({
		type : 'POST',
		url : base_url + 'PHP/Admin/agregarConvocatorias.php',
		data : {
			nombre : _nombre,
			categoria : _categoria,
			descripcion : _descripcion,
			fechaInicio : _fechaInicio,
			fechaFin : _fechaFin,	
		},
		beforeSend:function(){	
			alert("Se esta agregado")
		},
		success:function(respuesta){
			console.log(respuesta)
			alert("Se agregado")
		}
	});
}

function cargarConvocatoriaAdmin(){
	var div = document.getElementById('ConvocatoriasAdmin')
	$.ajax({
		url : base_url + 'PHP/Admin/convocatorias.php',
		type : 'POST',
		async: false,
		success:function(respuesta){
			if(respuesta != "no"){
				div.innerHTML+= respuesta
			}
			else{
				alert("Error")
			}
		},
		error:function(jqXHR, textStatus, errorThrown){
			console.log();
		}
	});

}



function cargarConvocatoria(){
	var div = document.getElementById('Convocatorias')
	$.ajax({
		url : base_url + 'PHP/convocatorias.php',
		type : 'POST',
		async: false,
		success:function(respuesta){
			console.log(respuesta)
			if(respuesta != "no"){
				div.innerHTML+= respuesta
			}
			else{
				alert("Error")
			}
		},
		error:function(jqXHR, textStatus, errorThrown){
		
		}
	});
}
