<div id="sidebar">
	<div class="mobile-hidden">
	<?php include (TEMPLATEPATH . '/_/inc/_me.php' ); ?>
		<section>
			<h4>Recent Posts</h4>
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
		</section>
		<?php if(!is_front_page()) { ?>
			<section>
			  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

				<?php endif; ?>
			</section>

		<?php } ?>
	</div>

</div>