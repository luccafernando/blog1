<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Fábio Donato</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">

<style>
  .background { 
    background-image: url("<?php bloginfo('template_directory'); ?>/teste.jpg");
	background-size: cover;
	background-repeat: no-repeat;
  }

</style>


	<header class="background" style="height: 100vh; padding-top: 10vh;">

	
		<div class="container" style="max-width: 1300px; margin:0 auto;">
				<nav class="navbar navbar-expand-lg navbar-dark">
				<div class="container-fluid">
				
					<div class="changeDisplay d-flex" style="align-items: center;">

						<div class="imagem" style="height: 4.25rem; width: 4.25rem; background-color: transparent;">
							<img src="https://donatofabio.files.wordpress.com/2021/04/cropped-1602934529803-1.jpeg" height="100%" style="border-radius:50%; border: white 2px solid;">
						</div>

						<div class="textos" style="margin-top: 0rem; margin-left: 2rem;">
							<p style="color: white; font-size: 1.3rem; font-weight: bold; margin-bottom: -0.4rem;">Fábio Donato</p>
							<p style="color: white; font-size: 1.3rem; ">Educador Executivo</p>
							<div class="social-media-icons" style="margin-top: -1rem;">
								<img src="https://i.imgur.com/MLVyvzn.png" height="100%">
							</div>

						</div>
					</div>
					
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
					<!-- ml-auto still works just fine-->
				<div class="navbar-nav ml-auto">


				<nav class="main-menu ml-auto ">
						<?php 
						wp_nav_menu( 
							array( 
								'theme_location' => 'my_main_menu' 
							) 
						); 
						?>
				</nav>


				</div>
				</div>
				</div>
				</nav>
	
		
		
  				<div class="container">
				  <div class="namePage" style="height: auto; width:auto; backgorund-color: white; margin-top:50vh;">
  						<hr>
						<h1 style="color: white;">Blog</h1>
					

					 </div>
				  </div>
  
		</div>
		
	</header>