<script>function changeLogin() {
		var element = document.getElementById("loggedin");
		element.classList.toggle("loggedin-ok");
	}
</script>
<nav>
	<div class="logos">
		<a href="./home.php"><img class="menu-compu" src="assets/img/logo-topo-chico-birrete-new.png" alt="Topo Chico" /></a>
	</div>
	<div onclick="myCelu(this)" class="menu-hamburguesa">
		<div class="bar1"></div>
		<div class="bar2"></div>
		<div class="bar3"></div>
	</div>
	<div id="menucelu" class="menu">
		<ul>
			<li><a href="brand-fundamentals.php" title="Brand fundamentals">Brand fundamentals</a></li>
			<li class="active-submenu"><a href="#" title="Sparkling Mineral water">Sparkling Mineral water</a>
				<ul class="desplegable-top-menu">
					<li><a href="large-store.php" title="Large Store">Large Store</a></li>
					<hr>
					<li><a href="small-store.php" title="Small Store">Small Store</a></li>
					<hr>
					<li><a href="fsop.php" title="FSOP">FSOP</a></li>
				</ul>
			</li>
			<li class="menumob"><a href="small-store.php" title="Small Store">Small Store</a></li>
			<li class="menumob"><a href="large-store.php" title="Large Store">Large Store</a></li>
			<li class="menumob"><a href="fsop.php" title="FSOP">FSOP</a></li>
			<li><a href="sabores.php" title="Sabores">Sabores</a></li>
			<li><a href="mixer.php" title="Mixer">Mixer</a></li>
			<!--li><a href="porfolio.php" title="Portfolio">Portfolio</a></li-->
			<li><a href="porfolio-approach.php" title="Portfolio approach">Portfolio approach</a></li>
			<li><a href="training-modules.php" title="Training Modules">Training Modules</a></li>						
			<li><a href="clear-session.php" class="novercelu logoutpc" title="Wellcome">Logout</a></li>
			<div id="loggedin" class="loggedin-none">
				<?php echo $_SESSION["usuario"] ?>
				<form action="clear-session.php" method="POST">
					<input style="text-align: center;" type="submit" value="Logout" />
				</form>
			</div>
		</ul>

	</div>
</nav>