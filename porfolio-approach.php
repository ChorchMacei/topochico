<!doctype html>
<html>
<?php
	$titulomostrar = 'Portfolio Approach';
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
		<div class="top top-porfolio-approach">
			<img src="assets/img/nuevas-fotos-1/titulo-porfolio-approach.png" alt="Porfolio-Approach" />
		</div>
		<div class="intro">
			<img src="assets/img/hr-estilo-home-recto.png" alt="divider" />
			<p class="parrafo-bajada"><b>USEFUL AND DETAILED INFORMATION</b><br>
			designed to guide you when executing more than one Topo Chico line of products together as a portfolio of brands – including Sparkling Mineral Water, Topo Chico Mixer and Topo Chico Sabores.</p>
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
					<p class="parrafo-producto icon-revert">TC Portfolio Executional Guidelines<img src="assets/img/iconos/pp_new.png" alt="icono de ppt"/></p>
					<p class="parrafo-producto-1"> A detailed look, by channel, on how to execute Topo Chico product lines in-store as a portfolio</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/porfolio-approach/TC-Portfolio-Executional-Guidelines.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 6.73 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			    <div>
					<p class="parrafo-producto icon-revert">TC Portfolio Shopper Playbook<img src="assets/img/iconos/pp_new.png" alt="icono de ppt"/></p>
					<p class="parrafo-producto-1">All the necessary information to understand how Topo Chico should be implemented in each channel when more than one brand is executed</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/porfolio-approach/Topo-Chico-Portfolio-Playbook.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 24.80 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			    <div>
					<p class="parrafo-producto icon-revert">TC Portfolio OBPPC <img src="assets/img/iconos/word_new.png" alt="icono de pdf"/></p>
					<p class="parrafo-producto-1">A summarized version of all Topo Chico Portfolio OBPPC together in one document</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/porfolio-approach/2024-TC-Portfolio-OBPPC.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
					<p class="download">< 1.70 MB >  Download</p>
				</div>
			</div>
			

			<div id="prod" class="producto">
			    <div>
					<p class="parrafo-producto icon-revert">TC Portfolio OBPPC 2024 and Historic <img src="assets/img/iconos/pp_new.png" alt="icono de ppt"/></p>
					<p class="parrafo-producto-1">Current and past Topo Chico OBPPC versions</p>
				</div>				
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/porfolio-approach/2024-TC-OBPPC-VERSIONS-2.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 4.23 MB >  Download</p>
				</div>
			</div>

			<!--<div id="prod" class="producto">
			    <div>
					<p class="parrafo-producto icon-revert">LS activation tools and PICOS: <img src="assets/img/iconos/pp_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">View the available marketing assets to activate in large stores and learn the in-store execution priorities in the Picture of Success.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/large-store/ls-activation-tools-and-pIcos.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 51.5 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">Yellow Wall and Yellow Block: <img src="assets/img/iconos/camarita_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">A short video to learn about our go-to-market strategy and how we intentionally merchandise our products differently from other brands.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/large-store/video4-yellow-block-&-yellow-wall.mp4" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
					<p class="download">< 382 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">LS Complete Channel overview: <img src="assets/img/iconos/pp_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">Find a comprehensive Topo Chico large store overview to use as a guide for strategic and executional excellence in this channel.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/large-store/ls-complete-channel-overview.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 129 MB >  Download</p>
				</div>
			</div>-->


			<!--ultimo boton que tiene el popup-->
			<!--<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">Topo Chico Product Spec Sheets: <img src="assets/img/iconos/pp_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">Product specification sheets with details of each Topo Chico SKU, both Original and Twists</p>
				</div>
				<div  class="botones-productos">
				<div onclick="myFunctionAbrir()" class="btn-rojo animbtnhome">Learn More</div>
					<p class="download">< 46.2 MB >  Download</p>
				</div>
			</div>	-->	
		</div>

<!--aca empieza el contenido del  popup-->
<div class="ordenar-contenedor">
<div  class="contenedor" id="popup" title="">
        <a onclick="myFunctionCerrar()" class="boton">X</a>
	
		<div style="margin-bottom:0px;width:80%;"class="container mt-3">
				<h2>materials/LARGE STORE/TC-PRODUCT-SPEC-SHEETS</h2>
					
			<div id="accordion">
						<div style="padding-top: 20px;" class="card">
						<details>
						<summary>TC-PRODUCT-SPEC-SHEETS</summary>						
						<div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
							<div class="card-body">
									<div class="botones-productos">
									<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/topo-chico-portafolio-glass-presentation.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>topo-chico-portafolio-glass-presentation.pdf</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 2.7 MB >  Download</p>-->
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/topo-chico-portafolio-glass-presentation.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
										<div><p>topo-chico-portafolio-glass-presentation.pptx</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 7.7 MB >  Download</p>-->
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/topo-chico-sku-sell-sheets.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>topo-chico-sku-sell-sheets.pdf</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 895 KB >  Download</p>-->
									</div>                        
							</div>
						</div>
						</details>
						</div>

						<div style="padding-top: 20px;" class="card">
						<details>
						<summary>ORIGINAL</summary>
						<div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
							<div class="botones-productos">
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/original/tch-original-6.5-oz-20-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-6.5-oz-20-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/original/tch-original-12-oz-4-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-12-oz-4-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/original/tch-original-12-oz-12pk.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-12-oz-12pk.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/original/tch-original-12-z-24-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-12-z-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/original/tch-original-25.4-oz-24-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-25.4-oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/original/tch-original-33.8-oz-pet.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-33.8-oz-pet.pdf</p></div>           
										<!--<p class="download">< 6,66 MB >  Download</p>-->
							</div>         
							</div>
						</div>
						</details>
						</div>



				<div style="padding-top: 20px;"class="card">
						<details>
						<summary>TWIST</summary>
						<div id="collapseThree" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
							<div class="botones-productos">
							            <a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/tc-product-spec-sheets/twists/tch-mineral-water-twist-lime-12oz-24-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-mineral-water-twist-lime-12oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/twists/tch-mineral-water-twist-of-tangerine-12oz-4pk.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-mineral-water-twist-of-tangerine-12oz-4pk.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/twists/tch-mineral-water-twist-of-tangerine-12oz-24-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-mineral-water-twist-of-tangerine-12oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/twists/tch-twistgrapefruit-12-oz-4pk.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-twistgrapefruit-12-oz-4pk.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/twists/tch-twistgrapefruit-12-oz-24-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-twistgrapefruit-12-oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets/twists/tch-twistlime-12-oz-4pk.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-twistlime-12-oz-4pk.pdf</p></div>           
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
				<a href="https://topochicouniversity.com/materials/large-store/tc-product-spec-sheets" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
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