$(document).on("click", "input[type=submit]", function(e){
	
	
	var name = $("#name").val().trim()
	var email = $("#email").val().trim()	
	if ( name == ""  ) return
	if ( !email.match("@")) return	
	var data = {
		name: name,
		email: email
	}
	
	e.preventDefault()	
	$.ajax({
		type: "POST",
		url: "valida-login.php",
		data: data,
		success: function(data) { 			
			console.log(data)
			if ( data == "OK") {	
				//console.log("Aceptado")				
				window.location.href = "notice.php?mail=" + email
				return
				$("#resultado").html("<div style='color:green'>Acceso concedido.<br>Revisa tu e-mail para ingresar.</div>")				
				$("input").attr("disabled", "disabled")	
			} else {
				$("#resultado").html(data)				
			}
		},
		error: function(error) {
			console.log(error)			
		}
	})			
	
})