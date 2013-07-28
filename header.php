<!doctype html>
<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<title><?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald:300">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<header>

			<div class="container">

				<h1><a href="http://www.dicaswp.com.br" title="Dicas WordPress"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a></h1>

				<ul class="nav-social">
					<li><a href="http://facebook.com/dicaswordpress"><img src="<?php bloginfo('template_directory'); ?>/images/icofacebook.png"></a></li>
					<li><a href="https://twitter.com/dicaswpbr"><img src="<?php bloginfo('template_directory'); ?>/images/icotwitter.png"></a></li>
					<li><a href="https://plus.google.com/107847042620356407418"><img src="<?php bloginfo('template_directory'); ?>/images/icogoogle.png"></a></li>
					<li><a href="http://www.youtube.com/user/AgenciaYelt/feed?view_as=public"><img src="<?php bloginfo('template_directory'); ?>/images/icoyoutube.png"></a></li>
					<li><a href="http://www.dicaswp.com.br/feed/"><img src="<?php bloginfo('template_directory'); ?>/images/icorss.png"></a></li>
				</ul>

			</div>

		</header>