<?php
	get_header();

	if ( have_posts() ) {
		while ( have_posts() ) :
			the_post();
			global $post;
			if ($post->post_parent) {
				echo '<h2 class="page-title">';
				echo the_title();
				echo '</h2>';
			}
			
			if (has_post_thumbnail()) {
				the_post_thumbnail();
			}
				
			if ($post->post_name == "band") {
				echo '<div id="band">';
				echo '	<a class="mario" href="mario"></a>';
				echo '	<a class="simon" href="simon"></a>';
				echo '</div>';
			}
			
			the_content();
		endwhile;
	}
	
	get_footer();
?>