<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name');?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- site-Header-->
	<header class="site-Header">
	<!-- 	<img src="<?php //echo wp_get_attachment_url(get_theme_mod('MyPP_Header_back_image')) ?>"> -->
		<h1><a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a></h1>
		<h5><?php bloginfo('description') ?></h5>
		
<!-- 		<nav class="social-nav">

		<?php 
		// $args = array('theme_location' => 'social-bar');
		?> 

		<?php // wp_nav_menu( $args ); ?>
		</nav>
 -->
		<div class="site-nav-container">
			<input type="checkbox" id="nav-toggle" class="nav-toggle" name="nav-toggle">
			<!-- navigation bar -->
			<!-- site-nav -->
			<nav class="site-nav">

			<?php 
			$args = array('theme_location' => 'primary');
			?> 

			<?php wp_nav_menu( $args ); ?>
			</nav>
			<!-- /site-nav -->
			<label for="nav-toggle" class="nav-toggle-label">
				<span></span>
			</label>
		</div>

		<!-- site-header social icon location -->
		<div class="header-social-container">
			<?php dynamic_sidebar('sidebar1'); ?>
		</div>
	</header>
	<!-- /site-Header-->