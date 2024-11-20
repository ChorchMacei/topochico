<!doctype html>
<html>
<?php
	$titulomostrar = 'Useful resources';
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
		<div class="top top-useful-resources">
			<img src="./assets/img/nuevas-fotos-1/titulo-useful.png" alt="Useful Resourses" />
		</div>
		<div class="intro">
			<img src="assets/img/hr-estilo-home-recto.png" alt="divider" />
			<p class="parrafo-bajada"><b>OTHER BRAND RESOURCES</b><br>
            Link to other available resources to help you activate Topo Chico, including marketing communications tools and brand assets.</p>
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
				<img src="assets/img/logos/ko-assets.png" alt="KO Assets" />
				<img id="lin" src="assets/img/logos/linea.png" alt="Linea saparadora" />
				<p class="parrafo-producto">KO ASSETS CONTENT STORE TOPO CHICO NAOU</p>
				<div class="botones-productos">
				<a href="https://assets.coke.com/content/share/us/en/all-content-stores/topo-chico-naou.html" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
				</div>
			</div>
			<div id="prod" class="producto">
				<img src="assets/img/logos/coc.png" alt="Logo Coca-Cola Store" />
				<img id="lin" src="assets/img/logos/linea.png" alt="Linea saparadora" />
				<p class="parrafo-producto">TOPO CHICO COLLECTION ON COKE STORE</p>
				<div class="botones-productos">
				<a href="https://www.coca-colastore.com/collections/brands/topo-chico" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
				</div>
			</div>			
			<!--div id="prod" class="producto ">
				<img src="assets/img/logos/spreadred_new.png" alt="Logo spreadred" />
				<img id="lin" src="assets/img/logos/linea.png" alt="Linea saparadora" />
				<p class="parrafo-producto">Topo Chico premiums on spread the red</p>
			  <div class="botones-productos">
				<a href="https://www.spreadthered.us/documents/cocacola/Deck_2022_TC_OnPremise.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome"> &nbsp;&nbsp;ON-PREMISE&nbsp;&nbsp; </div></a>
				<a href="https://www.spreadthered.us/documents/cocacola/Deck_2022_TC_SmallToolKit.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">SMALL STORES</div></a>
				<a href="https://www.spreadthered.us/documents/cocacola/Deck_2022_TC_LargeToolKit.pdf" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">LARGE STORES</div></a>
			  </div>
			</div-->
			<div id="prod" class="producto ">
				<img src="assets/img/logos/topochico.png" alt="Logo topochico" />
				<img id="lin" src="assets/img/logos/linea.png" alt="Linea saparadora" />
				<p class="parrafo-producto">Topo chico READY TO SELL 2023&nbsp;</p>
				<div class="botones-productos">
				<a href="https://topochicouniversity.com/materials/brand-resources/tc-rts-2022-content-MAP-V4.pptx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Download</div></a>
				</div>
			</div>

			<div id="prod" class="producto">
				<img src="assets/img/logos/cokechannel_new.png" alt="cokechannel" />
				<img id="lin" src="assets/img/logos/linea.png" alt="LXinea saparadora" />
				<p class="parrafo-producto">Topo Chico selling tools on Coke Channel</p>
				<div class="botones-productos">
				<a href="https://groups.coca-cola.com/sites/CokeChannel/SitePages/Premium-Sparkling-Water.aspx" target="_blank" rel="nofollow"><div class="btn-rojo animbtnhome">Learn More</div></a>
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