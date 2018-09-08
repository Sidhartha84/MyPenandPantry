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
	<div class="body-grid-container">
			<header class="site-Header" 
					style="
					background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('MyPP_Header_back_image')) ?>);
					background-size: cover; 
					background-blend-mode: multiply;
					background-color: rgba(0,0,0,0.2); 
					">
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
<!-- 					<input type="checkbox" id="nav-toggle" class="nav-toggle" name="nav-toggle">
 -->					
 					<!-- <label for="nav-toggle" class="nav-toggle-label"> -->
 					<div class="nav-toggle-label">
 						<span class="nav-button"></span>
 					</div>
 					<!-- </label> -->
 					<!-- navigation bar -->
 					<!-- site-nav -->
 					<nav class="site-nav">
 						<?php 
 						$args = array('theme_location' => 'primary');
 						?> 
 						<?php wp_nav_menu( $args ); ?>
 					</nav>
 					<!-- /site-nav -->

 					<!-- header search space-->
 					<div class="header-search">
 						<?php get_search_form(); ?>
 					</div>

 					<!-- /header search space-->

 					<script type="text/javascript">
 						jQuery(document).ready(
 							function(){
 								jQuery(".nav-button").click(
 									function(){
 										// function body...
 										jQuery(".site-nav").slideToggle();
 										});
 						});
 					</script>	
				</div>

				<!-- site-header social icon location -->
				<div class="header-social-container-desktop">
					<?php dynamic_sidebar('sidebar1'); ?>
				</div>
			</header>
			<!-- /site-Header-->