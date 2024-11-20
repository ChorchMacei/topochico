<!doctype html>
<html>
<?php
	$titulomostrar = 'Brand Fundamentals';
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
		<div class="top top-brand-fundamentals">
			<img src="assets/img/nuevas-fotos-1/titulo-brand-fundamentals.png" alt="brand-fundamentals" />
		</div>
		<div class="intro">
			<img src="assets/img/hr-estilo-home-recto.png" alt="divider" />
			<p class="parrafo-bajada"><b>INTRODUCTION TO TOPO CHICO</b><br>
			In <span style="color: #FFC400;">Brand Fundamentals</span>, you will be introduced to Topo Chico and understand the brand’s compelling history, what makes it special, the core consumer, where it fits within the Sparkling Water category, brand guidelines and the messaging architecture.</p>
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
					<p class="parrafo-producto icon-revert">The Topo Chico Legacy: <img src="assets/img/iconos/pp_new.png" alt="icono de video"/></p>
					<p class="parrafo-producto-1">Learn about the origin story of the brand and its 125-year history.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/brand-fundamentals/Topo-Chico-Legacy.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 27.22 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">The Topo Chico Brand Difference: <img src="assets/img/iconos/camarita_new.png" alt="icono de Power Point"/></p>
					<p class="parrafo-producto-1">A brief video to understand the unique brand edge and what sets Topo Chico apart from others in the category.</p>		
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/brand-fundamentals/the-topo-chico-brand-difference.mp4" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
					<p class="download">< 260 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">The Topo Chico Consumer: <img src="assets/img/iconos/pp_new.png" alt="icono de Video"/></p>
					<p class="parrafo-producto-1">Meet our target audience through a snapshot of their lifestyle, mindset, consumption behaviors, and understand why Topo Chico is beloved.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/brand-fundamentals/Topo-chico-consumer-final.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
					<p class="download">< 10.84 MB  >Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">The Topo Chico Success Story in US<img src="assets/img/iconos/camarita_new.png" alt="icono de Imagen"/></p>
					<p class="parrafo-producto-1">A recap of how Topo Chico was born and introduced to the US market</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/brand-fundamentals/TOPO-CHICO-Success-Story-2024.mp4" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 184 MB >Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">The Topo Chico Consumer: <img src="assets/img/iconos/camarita_new.png" alt="icono de Documento"/></p>
					<p class="parrafo-producto-1">A brief glimpse into our Topo Chico consumer and its cult like following.</p>		
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/brand-fundamentals/The-Topo-Chico-Consumer-feb-2024.mp4" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 159 MB>Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">Topo Chico Communication Fundamentals: <img src="assets/img/iconos/pp_new.png" alt="Icono Power Point"/></p>
					<p class="parrafo-producto-1">View the brand’s strategy, communication guidelines, messaging architecture and helpful Do’s and Don’ts for marketing execution.</p>
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/brand-fundamentals/Topo-Chico-Brand-Strategy-and-Communication-Strategy-Fundamentals.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 18.20 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">Topo Chico Marketing Approach<img src="assets/img/iconos/camarita_new.png" alt="icono de Documento"/></p>
					<p class="parrafo-producto-1">Our unique brand aproach to advertising and field marketing</p>		
				</div>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/brand-fundamentals/VIDEO-8-EDITADO-2.mp4" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 172 MB >Download</p>
				</div>
			</div>

			
			<div id="prod" class="producto">
				<div>
					<p class="parrafo-producto icon-revert">Topo Chico Product Spec Sheets: <img src="assets/img/iconos/pp_new.png" alt="Icono Power Point"/></p>
					<p class="parrafo-producto-1">Product specification sheets with details of each Topo Chico SKU, both Original and Twists.</p>
				</div>
				<div class="botones-productos">
				<div onclick="myFunctionAbrir()" class="btn-rojo animbtnhome">Learn More</div>
					<p class="download">< 46.2 MB >  Download</p>
				</div>
			</div>
		</div>

<!--aca empieza el contenido del  popup-->
<div class="ordenar-contenedor">
<div  class="contenedor" id="popup" title="">
        <a onclick="myFunctionCerrar()" class="boton">X</a>
	
		<div style="margin-bottom:0px;width:80%;"class="container mt-3">
				<h2>materials/BRAND FUNDAMENTALS/TC-PRODUCT-SPEC-SHEETS</h2>
					
			<div id="accordion">
						<div style="padding-top: 20px;" class="card">
						<details>
						<summary>TC-PRODUCT-SPEC-SHEETS</summary>						
						<div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
							<div class="card-body">
									<div class="botones-productos">
									<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/topo-chico-portafolio-glass-presentation.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>topo-chico-portafolio-glass-presentation.pdf</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 2.7 MB >  Download</p>-->
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/topo-chico-portafolio-glass-presentation.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
										<div><p>topo-chico-portafolio-glass-presentation.pptx</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 7.7 MB >  Download</p>-->
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/topo-chico-sku-sell-sheets.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
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
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/original/tch-original-6.5-oz-20-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-6.5-oz-20-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/original/tch-original-12-oz-4-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-12-oz-4-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/original/tch-original-12-oz-12pk.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-12-oz-12pk.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/original/tch-original-12-z-24-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-12-z-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/original/tch-original-25.4-oz-24-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-original-25.4-oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/original/tch-original-33.8-oz-pet.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
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
							            <a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/twists/tch-mineral-water-twist-lime-12oz-24-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-mineral-water-twist-lime-12oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/twists/tch-mineral-water-twist-of-tangerine-12oz-4pk.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-mineral-water-twist-of-tangerine-12oz-4pk.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/twists/tch-mineral-water-twist-of-tangerine-12oz-24-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-mineral-water-twist-of-tangerine-12oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/twists/tch-twistgrapefruit-12-oz-4pk.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-twistgrapefruit-12-oz-4pk.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/twists/tch-twistgrapefruit-12-oz-24-units.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>tch-twistgrapefruit-12-oz-24-units.pdf</p></div>
										<a href="https://topochicouniversity.com/materials/brand-fundamentals/tc-product-spec-sheets/twists/tch-twistlime-12-oz-4pk.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
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
			
		</div>
	</content>
</body>
<?php 
if ( ! @include( 'inc/footer.php' ) )
	die( 'No se pudo cargar el footer' );
?>
</html>