<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<title><?php wp_title('-', TRUE, 'right'); ?></title>
	
	<meta name="title" content="<?php wp_title('-', TRUE, 'right'); ?>" />
	<meta name="copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved." />
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<?php wp_head(); ?>
	
	<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap-theme.min.css" />

</head>
<body data-theme-directory="<?php bloginfo('template_directory'); ?>">

	<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" class="navbar-brand"><?php bloginfo('name'); ?></a>
			</div>
			<nav id="bs-navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php wp_nav_menu(array(
						'container'			=> FALSE,
						'depth'				=> 1,
						'fallback_cb'		=> '',
						'items_wrap'		=> '%3$s',
						'menu'				=> 'header-left',
						'theme_location'	=> 'header-left'
					)); ?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php wp_nav_menu(array(
						'container'			=> FALSE,
						'depth'				=> 1,
						'fallback_cb'		=> '',
						'items_wrap'		=> '%3$s',
						'menu'				=> 'header-right',
						'theme_location'	=> 'header-right'
					)); ?>
				</ul>
			</nav>
		</div>
	</header>
	
	<div class="container">
