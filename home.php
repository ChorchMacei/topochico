<!doctype html>
<html>
<?php
	$section = 'home';
	$titulomostrar = 'Home';
	include "inc/head.php" ?>
	<?php 
if ( ! @include( 'assets/js/incjs.php' ) )
	die( 'No se pudo cargar el módulo de Java Script' );
?>	

<body>
	<div class="cuadro-video">	
		
	<?php 
if ( ! @include( 'inc/nav.php' ) )
	die( 'No se pudo cargar la barra de navegación' );
?>


	<content class="miti-flex">
		<div class="tit-home">
			<img src="assets/img/nuevas/top-home.png" alt="Wellcome to Topo Chico University" />
			<p class="parrafo-bajada">a resource created to share the latest commercial information and to educate stakeholders on the Topo Chico family of brands and its execution.</p>
			<!--img src="assets/img/hr-estilo-home.png" alt="divider" /-->
		</div>
		<div class="botones-home">
			<a href="brand-fundamentals.php" class="button-big btn-home btn-brand-fundamentals">
				<div>Brand Fundamentals</div>
				<!--div class="btn-rojo animbtnhome">Learn More</div-->				
			</a>
			<span class="button-big btn-home btn-fsop">
				<div>Sparkling Mineral Water</div>
				<!--div class="btn-rojo animbtnhome">Learn More</div-->
				<div class="subbtn">
					<a href="large-store.php">Large Store</a>
					<a href="small-store.php">Small Store</a>
					<a href="fsop.php">FSOP</a>
				</div>
			</span>
			<a href="sabores.php" class="button-big btn-home btn-large-store">
				<div>Sabores</div>
				<!--div class="btn-rojo animbtnhome">Learn More</div-->
			</a>
			<a href="mixer.php" class="button-big btn-home btn-brand-resourses">
				<div>Mixer</div>
				<!--div class="btn-rojo animbtnhome">Learn More</div-->
			</a>
			<a href="porfolio-approach.php" class="button-big btn-home btn-small-store">
				<div>Portfolio Approach</div>
				<!--div class="btn-rojo animbtnhome">Learn More</div-->
			</a>			
			<a href="training-modules.php" class="button-big btn-home btn-channel-training">
				<div>Training Modules</div>
				<!--div class="btn-rojo animbtnhome">Learn More</div-->
			</a>
			<!--div onclick="myFunctionAbrir()"></div-->
			
			
		</div>
		<center id="boton-amarillo-top">
			<a href="useful-resources.php" target="_blank"><div class="btn-amarillo">Useful resource links</div></a>
		</center>
		<!--<img class="home-forma-der form-amarilla-der" src="assets/img/nuevas/bg-login/amarilla-der-3.png" alt="">
		<img class="home-forma-izq" src="assets/img/nuevas/bg-login/amarilla-izq-3.png" alt="">-->
		
<!--aca empieza el contenido del  popup-->
<div class="ordenar-contenedor">
<div  class="contenedor" id="popup" title="">
                           <a onclick="myFunctionCerrar()" class="boton">X</a>
	
		<div style="margin-bottom:0px;width:80%;"class="container mt-3">
				<h2 style="font: normal normal 500 26px/23px Topo Chico;">Useful resources</h2>
					
			<div id="accordion">
						<div style="padding-top: 20px;" class="card">
						<details>
						<summary>Resources 1</summary>
						<div id="collapseOne" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
									<div class="botones-productos">
									<a href="#"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>proximamente.pdf</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 2.7 MB >  Download</p>-->
									</div>                        
							</div>
						</div>
						</ditails>
						</div>



						<div style="padding-top: 20px;" class="card">
						<details>
						<summary>Resources 2</summary>
						<div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
									<div class="botones-productos">
									<a href="#"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>proximamente.pdf</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 2.7 MB >  Download</p>-->
									</div>                        
							</div>
						</div>
						</details>
						</div>



				<div style="padding-top: 20px;"class="card">
						<details>
						<summary>Others</summary>
						<div id="collapseThree" class="collapse" data-bs-parent="#accordion">
							<div class="card-body">
									<div class="botones-productos">
									<a href="#"><div class="btn-rojo animbtnhome">Learn More</div></a>
										<div><p>proximamente.pdf</p></div>
										<!--<p  style="text-align: left!important;"class="download">< 2.7 MB >  Download</p>-->
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
	<!--<video autoplay muted loop id="myVideo">
	  <source src="assets/img/video/ssoda-bg_1_1.mp4" type="video/mp4">	  
	  <source src="assets/img/video/soda-1.gif" type="video/mp4">
	  <img src="assets/img/video/soda-1.gif" alt="">
	  Your browser does not support HTML5 video.
	</video>-->
	<img class="botella-izquierda" src="assets/img/nuevas/bg-login/lata-verde-1-welcome.png"/>
	<img class="botella-derecha" src="assets/img/colage-home/botella-der.png"/>
	<?php 
	if ( ! @include( 'inc/footer.php' ) )
		die( 'No se pudo cargar el footer' );
	?>		
	</div>		
</body>
</html>