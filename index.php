<?php
	get_header();

	$page = get_page_by_path('news');
	
	echo get_the_post_thumbnail($page->ID);
	
	echo qtranxf_use($q_config['language'], apply_filters('the_content', $page->post_content), true);
	
	if ( have_posts() ) {
		while ( have_posts() ) :
			the_post();
			if (in_category('recent')) {
				echo '<div class="entry">';
				echo '	<h3>';
				the_title();
				echo '	</h3>';
				the_content();
				echo '</div>';
			}
		endwhile;
	}
?>
<div class="pagination"><?php next_posts_link('&rarr; Ältere Einträge'); ?></div>
<div class="pagination"><?php previous_posts_link('&rarr; Neuere Einträge'); ?></div>
<?php get_footer(); ?>
