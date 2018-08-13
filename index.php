<?php
get_header();
?>

<div class="container">
<?php
if (have_posts()):
	while (have_posts()):the_post();
?>
	<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
	<div class="post-meta-info">
		<p class="post-date"> <?php the_date('F jS, Y'); ?></p>
		<p class="post-author"> by <b><?php the_author(); ?></b></p>
	</div>
	<p><?php the_content(); ?></p>

<?php
	
	endwhile;

else :
	echo "<p> No Content found</p>";
endif;

get_footer();
?>