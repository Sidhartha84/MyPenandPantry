<?php
get_header();
?>

<!-- this includes below the header section excluding footer -->
<div class="container">
<?php
if (have_posts()):
	while (have_posts()):the_post();
?>

<article class="posts">
	<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

	<div class="post-meta-info">
		<p class="post-date"> <?php the_date('F jS, Y'); ?></p>
		<p class="post-author"> by <b><?php the_author(); ?></b></p>
	</div>

	<!-- the below statement is for the posts -->
	<!-- incase the excerpt text is not there for them then show the complete containt -->
	<?php if ($post->post_excerpt) {
	?>
		<p>
			<?php echo get_the_excerpt(); //the_content?>
			<a href="<?php the_permalink(); ?>">Read More</a>	
		</p>

	<?php
	} else{
		the_content();
	}
	?>

	<!-- <?php //the_excerpt(); ?> -->

<?php
	
	endwhile;

else :
	echo "<p> No Content found</p>";
endif;
?>

</article>

<?php
get_footer();
?>