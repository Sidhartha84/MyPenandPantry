<article class="posts">
	<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

	<div class="post-meta-info">
		<p class="post-info"> 
			<?php the_date('F jS, Y'); ?> |
			by <b><?php the_author();?></b> |
			Posted in 

			<?php
			$categories=get_the_category();
			$separator = ", ";
			$output='';

			if ($categories) {
			 	foreach ($categories as $category) {
			 		$output .= '<a href="'. get_category_link($category->term_id) .'">' . $category->cat_name . '</a>' . $separator;
			 	}

			 	echo trim($output, $separator);
			 } 
			?>
		</p>

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
</article>