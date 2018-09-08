<div class="image-container">
	<?php 
	$num=0;
	$number_of_slides=3;
	 $latestposts=get_posts(array(
	 	'numberposts'=> 3,
	 	'category'=> 2
	 ));
	 ?>
<!-- 
	 <h2>Automatic Slideshow</h2>
	 <p>Change image every 2 seconds:</p> -->

	 <div class="slideshow-container">
	 	<?php
	 	 if ($latestposts):
	 	 	foreach ($latestposts as $post) : setup_postdata($post);
	 	 		$num=$num+1;
	 	?>
	 			<div class="mySlides fade">
	 	  			<!-- <div class="numbertext"><?php //echo $num ?> / 3</div> -->
	 	  			<?php the_post_thumbnail('image_slider_thumbnail'); ?>
	 	  			<div class="text"><?php the_title(); ?></div>

	 	  			<div class="image-slider-description">
	 	  				<?php if ($post->post_excerpt) {
	 	  				?>
	 	  					<p><?php echo get_the_excerpt(); ?></p>
	 	  				<?php
	 	  				}
	 	  				?>
	 	  			</div>
	 			</div>
	 			<!-- <h3><?php //the_title(); ?></h3> -->

	 	<?php 
	 		endforeach;
	 	endif; 
	 	wp_reset_postdata();
	 	?>


	 	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	 	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<!-- <br> -->

	<div class="dot-container">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	</div>

	<script>
	var slideIndex = 0;
	showSlides_Transition();

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides_Transition() {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    var dots = document.getElementsByClassName("dot");
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    slideIndex++;
	    if (slideIndex > slides.length) {slideIndex = 1}    
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[slideIndex-1].style.display = "block";  
	    dots[slideIndex-1].className += " active";
	    setTimeout(showSlides_Transition, 10000); // Change image every 2 seconds
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}

	</script>
<!-- 	<?php 
	// $posts=get_posts(); 
	// if ($posts->have_posts()):
		// while ($posts->have_posts()):$posts->the_post();
	?>


		<h2><?php //the_title(); ?></h2>


		
	<?php
		// endwhile;

	// else :
		// echo "<p> No Content found</p>";
	// endif;
	?> -->
</div>