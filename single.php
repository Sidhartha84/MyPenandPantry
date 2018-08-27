<!-- this file controls the view of each post page-->
<?php
get_header();
?>

<div class="container">
<?php
if (have_posts()):
	while (have_posts()):the_post();
?>

<article class="posts">
	<h2> <?php the_title(); ?> </h2>
	<div class="post-meta-info">
		<p class="post-date"> <?php the_date('F jS, Y'); ?></p>
		<p class="post-author"> by <b><?php the_author(); ?></b></p>
	</div>
	<?php the_post_thumbnail('banner_thumbnail'); ?>
	<p><?php the_content(); //the_content?></p>

	<!-- <?php //the_excerpt(); ?> -->
</article>

<?php
	
	endwhile;

else :
	echo "<p> No Content found</p>";
endif;

get_footer();
?>