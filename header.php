<?php ?>
<!DOCTYPE html>
<html lang="fr">
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head();?>
	<title>Face</title>
</head>
<body>

	<!-- Header -->

	<header class="header row">

			<div class="logo-header">

	 		<img src="<?php echo get_stylesheet_directory_uri(); ?>/css/assets/images/logo-white.svg">
				
			</div>
		<!--Barre de navigation-->
			<nav class="navbar">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				<!-- <ul>
					<li><a class="active" href="home.html">HOME</a></li>
					<li><a href="association.html">L'ASSOCIATION</a></li>
					<li><a href="contact.html">CONTACT/NOUS SITUER</a></li>
				</ul> -->
			</nav>
	</header>
	<div class="container">
