<?php
get_header();
?>

<!-- this includes below the header section excluding footer -->
<div class="container">
<?php
if (have_posts()):
	while (have_posts()):the_post();


	get_template_part('content',get_post_format());


	
	endwhile;

else :
	echo "<p> No Content found</p>";
endif;
?>

<?php
get_footer();
?>