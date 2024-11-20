<!doctype html>
<html>
<?php
	$titulomostrar = 'FSOP';
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
		<div class="top top-FSOP">
			<img src="assets/img/nuevas-fotos-1/titulo-fsop.png" alt="FSOP" />
		</div>
		<div class="intro">
			<img src="assets/img/hr-estilo-home-recto.png" alt="divider" />
			<p class="parrafo-bajada"><b>TOPO CHICO IN THE HORECA CHANNEL</b><br>
			<span>In the FSOP section, you will learn how to activate Topo Chico Sparkling Mineral Water in on-premise accounts such as Hotels, Restaurants and Cafés (HoReCa) using our unique approach. With our Field Marketing team’s support, we have identified an effective way to sell in, drive loyalty and fuel sales within these specified outlets.  </p>
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
				<p class="parrafo-producto icon-revert" style="width:100%">FSOP Activation Tools and PICOS<img src="assets/img/iconos/pp_new.png" alt="icono de power point"/></p>
				<p class="parrafo-producto-1">View the available marketing assets to activate in different on-premise outlets, and learn the execution priorities in the Picture of Success.</p>
			</div>	
				<div class="botones-productos">
				<a href="https://topochicouniversity.com//materials/fsop/fsop-activation-tools-and-picos.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 12 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			<div>
				<p class="parrafo-producto icon-revert">On-premise SKU and their Perfect Serve:<img src="assets/img/iconos/pp_new.png" alt="icono de power point"/> </p>
				<p class="parrafo-producto-1">Find out how Topo Chico has created a brand experience through the ritual of a perfect pour at FSOP outlets. </p>
			</div>	
				<div class="botones-productos">
				<a href="https://topochicouniversity.com//materials/fsop/on-premise-sku-and-their-perfect-serve.pptx"target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 46.8 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			<div>
				<p class="parrafo-producto icon-revert">On Premise SKU, Roles and Perfect Serve:<img src="assets/img/iconos/camarita_new.png" alt="icono de Video"/></p>
				<p class="parrafo-producto-1">A brief video that introduces the Topo Chico products for FSOP outlets, the role of each and their perfect pour rituals on-premise.</p>
			</div>		
				<div class="botones-productos">
				<a href="https://topochicouniversity.com//materials/fsop/on-premise-sku-roles-and-server.mp4"target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
					<p class="download">< 49.4 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			<div>	
				<p class="parrafo-producto icon-revert">Topo Chico On-Premise Accounts Criteria:<img src="assets/img/iconos/pp_new.png" alt="icono de power point"/> </p>
				<p class="parrafo-producto-1">Identify what makes an on-premise account suitable for Topo Chico, including guardrails for outlet selection criteria.</p>
			</div>	
				<div class="botones-productos">
				<a href="https://topochicouniversity.com//materials/fsop/on-premise-account-criteria.pptx"target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 64.1 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			<div>	
				<p class="parrafo-producto icon-revert">Topo Chico Lighthouse Accounts:<img src="assets/img/iconos/camarita_new.png" alt="icono de Video"/> </p>
				<p class="parrafo-producto-1">A short video to understand the definition and criteria behind Lighthouse accounts.</p>
			</div>	
				<div class="botones-productos">
				<a href="https://topochicouniversity.com//materials/fsop/lighthouse-accounts.mp4"target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
					<p class="download">< 94.6 MB > Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			<div>
				<p class="parrafo-producto icon-revert">FSOP Strategy & Execution: <img src="assets/img/iconos/pp_new.png" alt="icono de power point"/></p>
				<p class="parrafo-producto-1">Learn about the brand strategy in the FSOP channel, including guardrails for account type selection, partnership mentality, our point of differentiation, and the activation picture of success.</p>
			</div>	
				<div class="botones-productos ">
				<a href="https://topochicouniversity.com//materials/fsop/fsop-strategy-and-execution.pptx"target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 14.5 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			<div>	
				<p class="parrafo-producto icon-revert">FSOP Complete Channel Overview: <img src="assets/img/iconos/pp_new.png" alt="icono de power point"/></p>
				<p class="parrafo-producto-1">Find a comprehensive Topo Chico @ FSOP overview to use as a guide for strategic and executional excellence in this channel. </p>
			</div>	
				<div class="botones-productos">
				<a href="https://topochicouniversity.com//materials/fsop/fsop-channel-overview.pptx"target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
					<p class="download">< 57.7 MB >  Download</p>
				</div>
			</div>

			<div id="prod" class="producto">
			<div>
				<p class="parrafo-producto icon-revert">FSOP activation tools and PICOS:<img src="assets/img/iconos/pp_new.png" alt="icono de power point"/> </p>
				<p class="parrafo-producto-1">View the available marketing assets to activate in different on-premise outlets, and learn the execution priorities in the Picture of Success.</p>
			</div>	
				<div class="botones-productos">
				<a href="https://topochicouniversity.com//materials/fsop/fsop-activation-tools-and-picos.pptx"target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
				   <p class="download">< 12 MB > Download </p>
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