var categoria
$(document).on("click", ".animbtnhome", function(e){
	var texto = $(this).text()
	texto = texto.toLowerCase().trim()
	var popup = $(this).closest("#popup")
	if ( popup.length) return	
	if (texto == "learn more") {
		/* Se está abriendo un menú */
		var contenedor = $(this).closest(".producto")
		var texto = contenedor.find("p.parrafo-producto").text().trim()
		categoria = texto		
		console.log("CATEGORIA", categoria)
	}	
})

$(document).on("click", ".producto a, .card a", function(e){		
	 // e.preventDefault()
	
	
	
	var download_link = $(this).attr("href")
	
	
	
	var card = $(this).closest(".card")
	if ( card.length) {
	console.log("ES SUBCAT")		
		var contenedor = $(this).closest("details")
		var subcategoria = contenedor.find("summary").text()		
	} else {
		var contenedor = $(this).closest(".producto")		
		console.log(contenedor.length)
		categoria = contenedor.find("p.parrafo-producto").text()					
		subcategoria = ""
		console.log("Borrando categoria")
	}
	
	var url	
	url = window.location.href	
	url = url.replace(/\/$/, "") 
	url = url.split("/")
	var pagina = url[url.length -1]
	pagina = pagina.replace(".php", "")
	//console.log(pagina)		
	url = $(this).attr("href")		
	url = url.split("/")
	var file = url[url.length -1]
	//console.log(file)	

	var data = {
		pagina: pagina, 
		filename: file,		
		categoria: categoria,
		subcategoria: subcategoria
	}
	$.ajax({
		type: "POST",
		url: "ajax/track-download.php",
		data: data,
		success: function(data) { 			
			console.log(data)
			//location.href = download_link
		},
		error: function(error) {
			console.log(error)			
		}
	})		
	
	
	
	
	
	
})