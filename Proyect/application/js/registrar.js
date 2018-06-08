
/*
function enviarRegistro(){
	var _nombre = document.getElementsByName('nombre')[0].value
	var _apellidoPaterno = document.getElementsByName('apellidoPaterno')[0].value
	var	_apellidoMaterno = document.getElementsByName('apellidoMaterno')[0].value
	var _email = document.getElementsByName('email')[0].value
	var _username = document.getElementsByName('username')[0].value
	var _password = document.getElementsByName('password') [0].value

	$.ajax({
		type : 'POST',
		url : base_url + 'index-register.php',
		data : {
			nombre : _nombre,
			apellidoPaterno : _apellidoPaterno,
			apellidoMaterno : _apellidoMaterno,
			email : _email,
			username : _username,
			password : _password,

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
*/