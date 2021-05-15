<header id="header" class="header">
	<!-- TOP-BAR START -->
	<div class="top-bar bg-ghostwhite">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="list-inline info">
						<li style="color:#ffeb3b"><span class="font-blue">Call Us:</span> +91 99304 39997 </li>
						<li style="color:#ffeb3b"><span class="font-blue">Mail Us:</span>planetricpower@gmail.com</li>
					</ul>
				</div>
				<div class="col-md-4 col-md-offset-2">
				
				</div>
			</div>
		</div>
	</div>	<!-- /.END TOP-BAR -->
	
	<!-- NAVIGATION -->
	<nav class="navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- TEMPLATE LOGO -->
				<a class="navbar-brand" href="index.php"><img src="images/partner/05.png" style="height:72px;padding-top:4px" alt="Color"></a>
			</div>

			<div class="collapse navbar-collapse" id="my-navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<?php
					  $pageName = basename($_SERVER['PHP_SELF']);
						if($pageName == "index.php") {
							echo "<li class='active'><a href='index.php'>HOME</a></li>";
							echo "<li><a href='about.php'>ABOUT US</a></li>";
							echo "<li><a href='product.php'>PRODUCTS</a></li>";
							echo "<li><a href='service.php'>SERVICES</a></li>";
							echo "<li><a href='gallery.php'>GALLERY</a></li>";
							echo "<li><a href='quality.php'>QUALITY</a></li>";
							echo "<li><a href='contact.php'>Contact us</a></li>";
						}
						if($pageName == "about.php") {
							echo "<li><a href='index.php'>HOME</a></li>";
							echo "<li class='active'><a href='about.php'>ABOUT US</a></li>";
							echo "<li><a href='product.php'>PRODUCTS</a></li>";
							echo "<li><a href='service.php'>SERVICES</a></li>";
							echo "<li><a href='gallery.php'>GALLERY</a></li>";
							echo "<li><a href='quality.php'>QUALITY</a></li>";
							echo "<li><a href='contact.php'>Contact us</a></li>";
						}
						if($pageName == "product.php") {
							echo "<li><a href='index.php'>HOME</a></li>";
							echo "<li><a href='about.php'>ABOUT US</a></li>";
							echo "<li  class='active'><a href='product.php'>PRODUCTS</a></li>";
							echo "<li><a href='service.php'>SERVICES</a></li>";
							echo "<li><a href='gallery.php'>GALLERY</a></li>";
							echo "<li><a href='quality.php'>QUALITY</a></li>";
							echo "<li><a href='contact.php'>Contact us</a></li>";
						}
						if($pageName == "service.php") {
							echo "<li><a href='index.php'>HOME</a></li>";
							echo "<li><a href='about.php'>ABOUT US</a></li>";
							echo "<li><a href='product.php'>PRODUCTS</a></li>";
							echo "<li class='active'><a href='service.php'>SERVICES</a></li>";
							echo "<li><a href='gallery.php'>GALLERY</a></li>";
							echo "<li><a href='quality.php'>QUALITY</a></li>";
							echo "<li><a href='contact.php'>Contact us</a></li>";
						}
						if($pageName == "gallery.php") {
							echo "<li><a href='index.php'>HOME</a></li>";
							echo "<li><a href='about.php'>ABOUT US</a></li>";
							echo "<li><a href='product.php'>PRODUCTS</a></li>";
							echo "<li><a href='service.php'>SERVICES</a></li>";
							echo "<li class='active'><a href='gallery.php'>GALLERY</a></li>";
							echo "<li><a href='quality.php'>QUALITY</a></li>";
							echo "<li><a href='contact.php'>Contact us</a></li>";
						}
						if($pageName == "quality.php") {
							echo "<li><a href='index.php'>HOME</a></li>";
							echo "<li><a href='about.php'>ABOUT US</a></li>";
							echo "<li><a href='product.php'>PRODUCTS</a></li>";
							echo "<li><a href='service.php'>SERVICES</a></li>";
							echo "<li><a href='gallery.php'>GALLERY</a></li>";
							echo "<li class='active'><a href='quality.php'>QUALITY</a></li>";
							echo "<li><a href='contact.php'>Contact us</a></li>";
						}
						if($pageName == "contact.php") {
							echo "<li><a href='index.php'>HOME</a></li>";
							echo "<li><a href='about.php'>ABOUT US</a></li>";
							echo "<li><a href='product.php'>PRODUCTS</a></li>";
							echo "<li><a href='service.php'>SERVICES</a></li>";
							echo "<li><a href='gallery.php'>GALLERY</a></li>";
							echo "<li><a href='quality.php'>QUALITY</a></li>";
							echo "<li class='active'><a href='contact.php'>Contact us</a></li>";
						}
						?>
				</ul>
			</div>
		</div>
		<!-- BAR-MULTI-COLOR -->
		<div class="bar-multi-color">
			<div class="container"></div>
		</div>
	</nav>
</header>	