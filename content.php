<article class="posts">
	<div class="post-container">
		<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

		<!-- the below statement is for the posts -->
		<!-- incase the excerpt text is not there for them then show the complete containt -->
		<?php if ($post->post_excerpt) {
		?>
		<div class="post-containt">
			<p>
				<?php echo get_the_excerpt(); //the_content?>
				<a href="<?php the_permalink(); ?>">Read More</a>	
			</p>
		</div>

		<?php
		} else{
			the_content();
		}
		?>
		<div class="post-meta-info">
			<p class="post-info"> 
				<?php the_date('F jS, Y'); ?> <br>|
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
				?> |
			</p>

		</div>
		<!-- <?php //the_excerpt(); ?> -->
	</div>
</article>