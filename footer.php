<footer class="site-footer">
	
	<p>  <?php bloginfo('name'); ?> -&copy; <?php echo date('Y'); ?> </p>

	<!--Footer navigation bar -->
	<!-- footer-nav -->
	<nav class="footer-nav">

		<?php 
		$args = array('theme_location' => 'footer');
		?>
		
		<?php wp_nav_menu( $args ); ?>
	</nav>
	<!-- /footer-nav -->
	
</footer>

<?php wp_footer();   ?>

</div><!--container-->
</body>
</html>