<!-- this file controls the view of each page -->

<?php
get_header();
?>

<div class="container">
<?php
if (have_posts()):
	while (have_posts()):the_post();
?>
	<h2 class="page-title"> <?php the_title(); ?></h2>
	<p><?php the_content(); ?></p>

<?php
	
	endwhile;

else :
	echo "<p> No Content found</p>";
endif;

get_footer();
?>