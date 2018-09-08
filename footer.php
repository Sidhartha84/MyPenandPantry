<!-- </div>container -->


<footer class="site-footer">

	<!--Footer navigation bar -->
	<div class="footer-black-part">
		<!-- site-footer social icon location -->
		<div class="header-social-container-footer">
			<p>Follow me</p>
			<?php dynamic_sidebar('sidebar1'); ?>
		</div>

		<!-- footer-nav -->
		<nav class="footer-nav">
			<?php 
			$args = array('theme_location' => 'footer');
			?>
			
			<?php wp_nav_menu( $args ); ?>
		</nav>
		<!-- /footer-nav -->
	</div>
	<p>  <?php bloginfo('name'); ?> -&copy; <?php echo date('Y'); ?> </p>
</footer>

<?php wp_footer();   ?>

</body>
</html>