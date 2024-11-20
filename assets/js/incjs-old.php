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
			document.getElementById("cambio").classList.add('listadoflex');
			document.getElementById("cambio").classList.remove('listadogrid');
			document.getElementsByClassName("producto").style.flexdirection = "";
			document.getElementById("lin").style.display= "block";
		}
		
		function cambiarGri() {
			document.getElementById("cambio").classList.add('listadogrid');
			document.getElementById("cambio").classList.remove('listadoflex');
			document.getElementsByClassName("producto").style.color= "green";
			document.getElementById("lin").style.display= "none";
		}
		
			//	if ( document.getElementById("cambio").classList.contains('MyClass') )
			//document.getElementById("cambio").classList.toggle('MyClass');
		
		function changeImageGrilla() {
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
		
    </script> 