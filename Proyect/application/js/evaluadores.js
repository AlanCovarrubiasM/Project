function enviarEvauladores(){
	var _nombre = document.getElementsByName('nombre')[0].value
	var _apellidoPaterno = document.getElementsByName('apellidoPaterno')[0].value
	var _apellidoMaterno = document.getElementsByName('apellidoMaterno')[0].value
	var _email = document.getElementsByName('email')[0].value
	var _username = document.getElementsByName('username')[0].value
	var _password = document.getElementsByName('password')[0].value

	$.ajax({
		type : 'POST',
		url: base_url + 'PHP/Admin/agregarEvaluadores.php',
		data:{
			nombre : _nombre,
			apelldioPaterno : _apellidoPaterno,
			apellidoMaterno : _apellidoMaterno,
			email : _email,
			username : _username,
			password : _password,
		},
		beforeSend(){
			alert("Se esta agregando")
		},
		success(respuesta){
			console.log(respuesta)
			alert("Se a agregado")
		}
	})
}

function cargarEvaludoresAdmin(){
	var div = document.getElementById('EvaluadoresAdmin')
	$.ajax({
		url : base_url + 'PHP/Admin/evaluadores.php',
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

function cargarEvaluadores(){
	var div = document.getElementById('Evaluadores')
	$.ajax({
		url : base_url + 'PHP/evaluadores.php',
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