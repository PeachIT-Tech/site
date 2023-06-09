<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="<?php echo get_bloginfo('description') ?>">
		<meta name="keywords" content="Peach IT, peachit, consultoria, desenvolvimento web">
		<meta name="author" content="Peach IT">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Peach IT - <?php echo get_the_title(); ?></title>
		<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favi-icon.webp">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css?v=2.7">
	</head> 
	<body class="lock">
		<div class="container-pre-load">
			<div class="column">
				<div class="container animation-2">
					<div class="shape shape1"></div>
					<div class="shape shape2"></div>
					<div class="shape shape3"></div>
					<div class="shape shape4"></div>
				</div>
			</div>
		</div>

		<header id="header" class="header">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<a class="navbar-brand" href="<?php echo get_site_url() ?>/">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-grande.png" alt="Logo Peach IT">
					</a>
					
					<div class="navbar-menu">
						<div class="collapse navbar-collapse" id="navbar-collapse">
							<?php
								wp_nav_menu(array(
									'theme_location' => '',
									'menu_id' 		 => 'menu', 
									'container' 	 => false,
									'menu_class' 	 => '',
									'items_wrap' 	 => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
									'depth' 		 => 2,
								));
							?>
						</div>
						<button class="navbar-button-client" type="button" data-bs-toggle="modal" data-bs-target="#modalClient">Seja cliente</button>
						<button class="navbar-toggler">
							<div class="menu-button" id="menu-button" onclick="menuMobile()">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</button>
					</div>
				</div>
			</nav>
		</header>
		
		<section id="main" class="main">