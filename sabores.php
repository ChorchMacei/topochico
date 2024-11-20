<!doctype html>
<html>
<?php
	$titulomostrar = 'Sabores';
	include "inc/head.php" ?>
<?php 
if ( ! @include( 'assets/js/incjs.php' ) )
	die( 'No se pudo cargar el módulo de Java Script' );
?>		
<?php 
if ( ! @include( 'inc/nav.php' ) )
	die( 'No se pudo cargar la barra de navegación' );
?>
<body>
	<content class="secciones">
	
		<div class="top top-sabores">
			<img src="assets/img/nuevas-fotos-1/titulo-sabores1.png"  alt="Sabores" />
		</div>
		<div class="intro">
			<img src="assets/img/hr-estilo-home-recto.png" alt="divider" />
			<p class="parrafo-bajada"><b>NECESSARY TOOLS TO GET TO KNOW TOPO CHICO SABORES,<br></b>
            and execute it in market – including the category opportunity, its channel strategy and unique value proposition - to make Sabores a success.</p>
			<img src="assets/img/hr-estilo-home.png" alt="divider" />
		</div>
		<div class="controles">
			<div>LIST VIEW</div>
			<div>
				<img id="imgClickAndChangeLista" class="grilla-lista" onclick = "cambioCol()" src="assets/img/lista-gris.png" alt="Vista de Columna" title="Vista de Columna"/>
				<img id="imgClickAndChangeGrilla" class="grilla-lista" onclick = "cambioGrilla()" src="assets/img/grilla-amarillo.png" alt="Vista de Grilla" title="Vista de Grilla"/>
			</div>
		</div>

		<div id="cambio" class="listado listadogrid">
			<div id="prod" class="producto">
				
			    <div>
					<p class="parrafo-producto icon-revert">TC Sabores OBPPC One Pager<img src="assets/img/iconos/word_new.png" alt="icono de pdf"/></p>
					<p class="parrafo-producto-1">A summarized document with focus channels, occasions, product info and target for Sabores</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/sabores/TC-Sabores-OBPPC-One-Pager.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
					<p class="download">< 959 KB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			    <div>
					<p class="parrafo-producto icon-revert">TC Sabores Sell Sheet Vertical<img src="assets/img/iconos/word_new.png" alt="icono de pdf"/></p>
					<p class="parrafo-producto-1">Useful Sell sheet with all the necessary product information summarized in one place</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/sabores/TC-Sabores-Sell-Sheet-vertical.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
					<p class="download">< 5.89 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			    <div>
					<p class="parrafo-producto icon-revert">TC Sabores Sell Sheet Vertical<img src="assets/img/iconos/pp_new.png" alt="icono de ppt"/></p>
					<p class="parrafo-producto-1">Useful Sell sheet with all the necessary product information summarized in one place</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/sabores/TC-Sabores-Sell-Sheet-vertical.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 17.5 MB >  Download</p>
				</div>
			</div>
			

			<div id="prod" class="producto">
			    <div>
					<p class="parrafo-producto icon-revert">TC Sabores Sell Sheet Presentation<img src="assets/img/iconos/pp_new.png" alt="icono de ppt"/></p>
					<p class="parrafo-producto-1">Useful slides with summarized information to help you sell-in Topo Chico Sabores</p>
				</div>				
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/sabores/TC-Sabores-Sell-Sheet.pptx" target="_blank"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 16.15 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			    <div>
					<p class="parrafo-producto icon-revert"> TC Sabores 2024 Shopper Playbook<img src="assets/img/iconos/pp_new.png" alt="icono de ppt"/></p>
					<p class="parrafo-producto-1">A complete Shopper Toolkit with the category opportunity, channel strategy and executional guidelines to successfully sell-in Topo Chico Sabores</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/sabores/TC-Sabores-2024-Shopper-Toolkit.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 54.5 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">TC Sabores Merchandising Strategy<img src="assets/img/iconos/pp_new.png" alt="icono de ppt"/></p>
					<p class="parrafo-producto-1">Merchandising principles and executional guidelines for the in-store execution of TC Sabores</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/sabores/Topo-Chico-Sabores-Merchandising-Strategy.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 35.63 MB >  Download</p>
				</div>
			</div>

			<!--<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert"><img src="assets/img/iconos/word_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1"></p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/large-store/ls-complete-channel-overview.pptx" target="_blank"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 129 MB >  Download</p>
				</div>
			</div>


			ultimo boton que tiene el popup-->
			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">TC Sabores Spec Sheets<img src="assets/img/iconos/word_new.png" alt="icono de pdf"/></p>
					<p class="parrafo-producto-1"> All Topo Chico Sabores SKU specification sheets per flavor for your needs</p>
				</div>
				<div  class="botones-productos">
				<div onclick="myFunctionAbrir()" class="btn-rojo animbtnhome">Learn More</div>
					<!--<p class="download">< 46.2 MB >  Download</p>-->
				</div>
			</div>	
			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">TC Sabores UPC Codes<img src="assets/img/iconos/pp_new.png" alt="icono de ppt"/></p>
					<p class="parrafo-producto-1">Useful summary of UPC codes and other specifications for all Topo Chico Sabores flavors and SKU</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/sabores/2024-Sabores-UPC.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 32.1 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">TC Sabores Operating Plan<img src="assets/img/iconos/pp_new.png" alt="icono de ppt"/></p>
					<p class="parrafo-producto-1">Complete Operations Plan for Topo Chico Sabores 2024</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/sabores/2024-Topo-Chico-Sabores-Operating-Plan.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 83.8 MB >  Download</p>
				</div>
			</div>
			
		</div>

<!--aca empieza el contenido del  popup-->
<div class="ordenar-contenedor">
<div  class="contenedor contenedor-fondo-sabores" id="popup" title="">
        <a onclick="myFunctionCerrar()" class="boton">X</a>
	
		<div style="margin-bottom:0px;width:80%;"class="container mt-3">
				<h2>TC-PRODUCT-SPEC-SHEETS</h2>
					
			<div id="accordion">
						<div style="padding-top: 20px;" class="card">
						<details>
						<summary>TC Sabores Blueberry Spec Sheet</summary>						
						<div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
							<div class="card-body">
									<div class="botones-productos">
									<a href="https://topochicouniversity.com/materials/sabores/TC-Sabores-Spec-Sheets/TC-Sabores-Blueberry-Spec-Sheet.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>TC-Sabores-Blueberry-Spec-Sheet.pdf</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 2.7 MB >  Download</p>-->
										
										<!--<p  style="text-align: left!important;"class="download">< 895 KB >  Download</p>-->
									</div>                        
							</div>
						</div>
						</details>
						</div>

						<div style="padding-top: 20px;" class="card">
						<details>
						<summary>TC Sabores Lime Spec Sheet</summary>
						<div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
							<div class="botones-productos">
										<a href="https://topochicouniversity.com/materials/sabores/TC-Sabores-Spec-Sheets/TC-Sabores-Lime-Spec-Sheet.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>TC-Sabores-Lime-Spec-Sheet.pdf</p></div>
										           
										<!--<p class="download">< 6,66 MB >  Download</p>-->
							</div>         
							</div>
						</div>
						</details>
						</div>



				<div style="padding-top: 20px;"class="card">
						<details>
						<summary>TC Sabores Spec Sheets</summary>
						<div id="collapseThree" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
							<div class="botones-productos">
							            <a href="https://topochicouniversity.com/materials/sabores/TC-Sabores-Spec-Sheets/TC-Sabores-Spec-Sheets.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>TC-Sabores-Spec-Sheets.pptx</p></div>
										          
										<!--<p class="download">< 6,66 MB >  Download</p>-->
							</div>         
							</div>
						</div>
						</details>
				</div>

				<div style="padding-top: 20px;"class="card">
						<details>
						<summary>TC Sabores Tangerine Spec Sheet</summary>
						<div id="collapseThree" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
							<div class="botones-productos">
							            <a href="https://topochicouniversity.com/materials/sabores/TC-Sabores-Spec-Sheets/TC-Sabores-Tangerine-Spec-Sheet.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>TC-Sabores-Tangerine-Spec-Sheet.pdf</p></div>
										          
										<!--<p class="download">< 6,66 MB >  Download</p>-->
							</div>         
							</div>
						</div>
						</details>
				</div>

				<div style="padding-top: 20px;"class="card">
						<details>
						<summary>Topo Chico Sabores UPCs</summary>
						<div id="collapseThree" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
							<div class="botones-productos">
							            <a href="https://topochicouniversity.com/materials/sabores/TC-Sabores-Spec-Sheets/Topo-Chico-Sabores-UPCs.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>Topo-Chico-Sabores-UPCs.pdf</p></div>
										         
										<!--<p class="download">< 6,66 MB >  Download</p>-->
							</div>         
							</div>
						</div>
						</details>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>			
 </div> 
 </div>


			<!--<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">Topo Chico Product Spec Sheets:<img src="assets/img/iconos/pp_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">Product specification sheets with details of each Topo Chico SKU, both Original and Twists.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets" target="_blank"><div class="btn-rojo animbtnhome">Learn More</div></a>
					<p class="download">< 46.2 MB >  Download</p>
				</div>
			</div>-->


		</div>
	</content>
</body>
<?php 
if ( ! @include( 'inc/footer.php' ) )
	die( 'No se pudo cargar el footer' );
?>
</html>