<div id="sidebar">
	<h2>Related Posts</h2>
	<?php $current_cat = get_query_var('cat'); ?>
	<ul>
	<?php
		$args = array( 'numberposts' => '5', 'category' => $current_cat );
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent ){
			echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
		}
	?>
	</ul>
	
	
	<h2>Photo Albums</h2>
	
	<?php if (is_category()): ?>
	
	  <ul class="album">
	<?php wp_list_categories('&title_li=&show_count=1&child_of=19'); ?>
	  </ul>
	<?php endif; ?>
	

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    	        
	<?php endif; ?>

</div>