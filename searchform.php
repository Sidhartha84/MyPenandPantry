<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="search-container">
		<input type="checkbox" id="search-icon-toggle" class="search-icon-toggle" name="search-icon-toggle"/>
<!-- 		<input type="checkbox" id="cross-icon-toggle" class="cross-icon-toggle" name="cross-icon-toggle"/> -->
		<div class="search-area">
			<input type="text" value="" name="s" id="s" class="search-write-box" />
			<input type="submit" id="searchsubmit" class="searchsubmit" name="searchButton" value="Search" />
		</div>
		<label class="search-icon-toggle-label" for="search-icon-toggle">
			<span></span>
<!-- 			<span class="search-icon-span">
				<img src="http://192.168.43.162/wordpress/wp-content/uploads/2018/09/icon-search.png" class="search-icon" />
			</span> -->
		</label>
<!-- 		
		<label class="cross-icon-toggle-label" for="cross-icon-toggle">
			<span class="cross-icon-span">
				<img src="http://192.168.43.162/wordpress/wp-content/uploads/2018/09/my_cross.png" class="cross-icon" />
			</span>
		</label>
		 -->
	</div>
</form>