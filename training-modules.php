<!doctype html>
<html>
<?php
	$titulomostrar = 'Training Modules';
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
		<div class="top top-channel-modules">
			<img src="assets/img/nuevas-fotos-1/titulo-training-modules.png" alt="channel-modules" />
		</div>
		<div class="intro">
			<img src="assets/img/hr-estilo-home-recto.png" alt="divider" />
			<p class="parrafo-bajada"><b>TEST YOUR BRAND KNOWLEDGE</b><br>
			Five progressive modules developed to educate and train users on the Topo Chico brand and how to achieve commercial excellence with Topo Chico Sparkling Mineral Water and Topo Chico Sabores in each channel.</p>
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
					<p class="parrafo-producto icon-revert">Module 01: <span class="parrafo-producto-2"> Fundamentals</span></p>
					<p class="parrafo-producto-1">Learn about the origins of Topo Chico, its consumer, commercial strategy and what makes this brand unique.</p>
			</div>	
				<div class="botones-productos">
					<a href="training/1-brand-fundamentals" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
				</div>
			</div>

			<div id="prod" class="producto">
			<div>
				<p class="parrafo-producto icon-revert">Module 02: <span class="parrafo-producto-2"> TCMW Large Store</span></p>
				<p class="parrafo-producto-1">Learn about the Topo Chico Sparkling Mineral Water commercial strategy in this channel, the PICOS, channel guidelines and the execution tools available.</p>
			</div>	
				<div class="botones-productos">
					<a href="training/2-large-store" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
				</div>
			</div>

			<div id="prod" class="producto">
			<div>
				<p class="parrafo-producto icon-revert">Module 03: <span class="parrafo-producto-2"> TCMW Small Store</span></p>
				<p class="parrafo-producto-1">Learn about the Topo Chico Sparkling Mineral Water commercial strategy in this channel, the PICOS, channel guidelines and the execution tools available.</p>
			</div>	
				<div class="botones-productos">
					<a href="training/3-small-store" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
				</div>
			</div>

			<div id="prod" class="producto">
			<div>
				<p class="parrafo-producto icon-revert">Module 04: <span class="parrafo-producto-2"> TCMW FSOP</span></p>
				<p class="parrafo-producto-1">Learn about the Topo Chico Sparkling Mineral Water commercial strategy for on-premise accounts, the pictures of success, channel guidelines and the execution tools available for HoReCa.</p>
			</div>
				<div class="botones-productos">
					<a href="training/4-FSOP" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
				</div>
			</div>
			
			<div id="prod" class="producto">
			<div>
				<p class="parrafo-producto icon-revert">Module 05: <span class="parrafo-producto-2"> TC Sabores</span></p>
				<p class="parrafo-producto-1">Learn about the opportunity for expansion, Sabores category Opportunity, how to win in the category and PICOS & POS One-pagers per channel.</p>
			</div>
				<div class="botones-productos">
					<a href="training/5-sabores" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
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