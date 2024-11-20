<!doctype html>
<html>
<?php
	$titulomostrar = 'Small Store';
	include 'inc/head.php' ?>
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
		<div class="top top-small-store">
			<img src="assets/img/nuevas-fotos-1/titulo-small-store.png" alt="samll-store" />
		</div>
		<div class="intro">
			<img src="assets/img/hr-estilo-home-recto.png" alt="divider" />
			<p class="parrafo-bajada"><b>TOPO CHICO IN THE SMALL STORE CHANNEL</b><br>
			<span>In this section, you will learn how to activate Topo Chico Sparkling Mineral Water in the small store and liquor store channel. Discover why, how, and where to execute the brand in small stores using a channel-led commercial strategy.</p>
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
					<p class="parrafo-producto icon-revert">SS Order Of Entry: <img src="assets/img/iconos/pp_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">Understand the priority order of how Topo Chico products should be introduced and sold, with channel-specific guidance for all SKUs. </p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/small-store/small-store-order-of-entry.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 6.66 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">Topo Chico Small Store Sell Sheet:<img src="assets/img/iconos/word_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">Download a summary of what you need to know in order to activate Topo Chico successfully in the small stores and liquor outlets.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/small-store/sell-sheet-small-stores.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
					<p class="download">< 778 KB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">SS Strategy & Rules of Engagement:<img src="assets/img/iconos/pp_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">Learn about the brand strategy in the samll store channel, including guardrails for best-in-class commercial execution.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/small-store/ss-strategy-and-rules-of-engagement.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 21.8 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">SS activation tools and PICOS: <img src="assets/img/iconos/pp_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">View the available marketing assets to activate in small stores and liquor outlets and learn the in-store execution priorities in the Picture of Success.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/small-store/ss-activation-tools-and-picos.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 13.5 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">SS Complete channel overview: <img src="assets/img/iconos/pp_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">Find a comprehensive overview to use as a guide for strategic and executional excellence of Topo Chico in this channel.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/small-store/ss-complete-channel-overview.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 35.4 MB >  Download</p>
				</div>
			</div>
<!--ultimo boton que tiene el popup-->
			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">Topo Chico Product Spec Sheets: <img src="assets/img/iconos/pp_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">Product specification sheets with details of each Topo Chico SKU, both Original and Twists</p>
				</div>
				<div  class="botones-productos">
				 <div onclick="myFunctionAbrir()" class="btn-rojo animbtnhome">Learn More</div>
					<!--<p class="download">< 46.2 MB >  Download</p>-->
				</div>
			</div>		
		</div>

<!--aca empieza el contenido del  popup-->
<div class="ordenar-contenedor">
<div  class="contenedor" id="popup" title="">
                           <a onclick="myFunctionCerrar()" class="boton">X</a>
	
		<div style="margin-bottom:0px;width:80%;"class="container mt-3">
				<h2 style="font: normal normal 500 26px/23px Topo Chico;">materials/SMALL STORE/TC-PRODUCT-SPEC-SHEETS</h2>
					
			<div id="accordion">
						<div style="padding-top: 20px;" class="card">
						<details>
						<summary>TC-PRODUCT-SPEC-SHEETS</summary>
						<div id="collapseOne" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
									<div class="botones-productos">
									<a href="https://topochicouniversity.com/materials/small-store/topo-chico-portafolio-glass-presentation.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>topo-chico-portafolio-glass-presentation.pdf</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 2.7 MB >  Download</p>-->
										<a href="https://topochicouniversity.com/materials/small-store/topo-chico-portafolio-glass-presentation.pptx"><div class="btn-rojo animbtnhome">Download</div></a>
										<div><p >topo-chico-portafolio-glass-presentation.pptx</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 7.7 MB >  Download</p>-->
										<a href="https://topochicouniversity.com/materials/small-store/topo-chico-sku-sell-sheets.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>topo-chico-sku-sell-sheets.pdf</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 895 KB >  Download</p>-->
									</div>                        
							</div>
						</div>
						</ditails>
						</div>



						<div style="padding-top: 20px;" class="card">
						<details>
						<summary>ORIGINAL</summary>
						<div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
							<div class="botones-productos">
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/original/tch-original-6.5-oz-20-units.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-6.5-oz-20-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/original/tch-original-12-oz-4-units.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-12-oz-4-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/original/tch-original-12-oz-12pk.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-12-oz-12pk.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/original/tch-original-12-z-24-units.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-12-z-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/original/tch-original-25.4-oz-24-units.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-25.4-oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/original/tch-original-33.8-oz-pet.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
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
							            <a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/twists/tch-mineral-water-twist-lime-12oz-24-units.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-mineral-water-twist-lime-12oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/twists/tch-mineral-water-twist-of-tangerine-12oz-4pk.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-mineral-water-twist-of-tangerine-12oz-4pk.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/twists/tch-mineral-water-twist-of-tangerine-12oz-24-units.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-mineral-water-twist-of-tangerine-12oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/twists/tch-twistgrapefruit-12-oz-4pk.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-twistgrapefruit-12-oz-4pk.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/twists/tch-twistgrapefruit-12-oz-24-units.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-twistgrapefruit-12-oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/small-store/tc-product-spec-sheets/twists/tch-twistlime-12-oz-4pk.pdf"><div class="btn-rojo animbtnhome">Learn More</div></a>
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


	</content>
</body>
<?php 
if ( ! @include( 'inc/footer.php' ) )
	die( 'No se pudo cargar el footer' );
?>
</html>			