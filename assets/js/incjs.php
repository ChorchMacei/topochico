    <script>
		
		function cambioCol() {
			cambiarCol();
			changeImageLista();
		}
		
		function cambioGrilla() {
			cambiarGri();
			changeImageGrilla();
		}
		
		function cambiarCol() {
			  // guardo en la variable elems los tags que tengas la clase producto
			  var elems = document.getElementsByClassName( 'producto' );
			  // comienzo un bucle
			  for ( var i = 0, l = elems.length; i < l; i++ )
				// con elems i le cambio a dichos elementos el estilo.
				elems[i].style.flexDirection = "row";
				
			document.getElementById("cambio").classList.add('listadoflex');
			document.getElementById("cambio").classList.remove('listadogrid');
			document.getElementById("lin").style.display= "block";
		}
		
		function cambiarGri() {
			
			  // guardo en la variable elems los tags que tengas la clase producto
			  var elems = document.getElementsByClassName( 'producto' );
			  // comienzo un bucle
			  for ( var i = 0, l = elems.length; i < l; i++ )
				// con elems i le cambio a dichos elementos el estilo.
				elems[i].style.flexDirection = "column";
			  
			document.getElementById("cambio").classList.add('listadogrid');
			document.getElementById("cambio").classList.remove('listadoflex');
			document.getElementById("lin").style.display= "none";
		}
		
			//	if ( document.getElementById("cambio").classList.contains('MyClass') )
			//document.getElementById("cambio").classList.toggle('MyClass');
		
		function changeImageGrilla() {
			console.log(document.getElementById("imgClickAndChangeGrilla").src)
			// esto para que funcione debe tener ruta absoluta lado cliente o usar backgroud.
			if (document.getElementById("imgClickAndChangeGrilla").src == "assets/img/grilla-gris.png"){
				document.getElementById("imgClickAndChangeGrilla").src = "assets/img/grilla-amarillo.png";
			} else {
				document.getElementById("imgClickAndChangeGrilla").src = "assets/img/grilla-gris.png";
			}
			if (document.getElementById("imgClickAndChangeLista").src == "assets/img/lista-amarillo.png"){
				document.getElementById("imgClickAndChangeLista").src = "assets/img/lista-gris.png";
			} else {
				document.getElementById("imgClickAndChangeLista").src = "assets/img/lista-amarillo.png";
			}			
		}
		
		function changeImageLista() {
			console.log("L")
			if (document.getElementById("imgClickAndChangeLista").src == "assets/img/lista-amarillo.png"){
				document.getElementById("imgClickAndChangeLista").src = "assets/img/lista-gris.png";
			} else {
				document.getElementById("imgClickAndChangeLista").src = "assets/img/lista-amarillo.png";
			}
			if (document.getElementById("imgClickAndChangeGrilla").src == "assets/img/grilla-gris.png"){
				document.getElementById("imgClickAndChangeGrilla").src = "assets/img/grilla-amarillo.png";
			} else {
				document.getElementById("imgClickAndChangeGrilla").src = "assets/img/grilla-gris.png";
			}			
		}	
		
		function myFunctionAbrir() {
		var x = document.getElementById("popup");
		x.style.display = "block";
		}
		function myFunctionCerrar() {
		var x = document.getElementById("popup");
		x.style.display = "none";
		}
		
    </script> 