<?php
get_header();
?>

<!-- this includes below the header section excluding footer -->
<!-- <div class="container"> -->
<?php
$type_of_post='image';
if (have_posts()):
	while (have_posts()):the_post();


		get_template_part('content',get_post_format());
	
	endwhile;

else :
	echo "<p> No Content found</p>";
endif;
?>

<div class="about-the-auhor-container">
	<div class="author">
		<h3>ABOUT ME</h3>
		<div class="author-avatar">
			<?php echo get_avatar(get_the_author_meta('ID'),512); ?>
		</div>
		<div class="about-author">
			<?php echo wpautop(get_the_author_meta('description')); ?>
		</div>
		<div class="author-read-more">
			<a href="#">READ MORE</a>
		</div>
	</div>
</div>

<?php
get_footer();
?>