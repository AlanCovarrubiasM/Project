$(document).ready(function(){
	$('.delate').click(function(){
		var _number = this.getAttribute('data')
		console.log("numero "+_number)
		$.ajax({
			type : 'POST',
			url : base_url + 'PHP/Admin/eliminar.php',
			data : {
				number :_number
			},
			beforeSend:function(){
				alert("Se esta eliminando")
			},
			success:function(respuesta){
				console.log(respuesta)
			}
		})
	})
})