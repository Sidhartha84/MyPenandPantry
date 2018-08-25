</div><!--container-->


<footer class="site-footer">

	<!--Footer navigation bar -->
	<!-- footer-nav -->
	<nav class="footer-nav">

		<?php 
		$args = array('theme_location' => 'footer');
		?>
		
		<?php wp_nav_menu( $args ); ?>
	</nav>
	<!-- /footer-nav -->
	<p>  <?php bloginfo('name'); ?> -&copy; <?php echo date('Y'); ?> </p>
</footer>

<?php wp_footer();   ?>

</body>
</html>