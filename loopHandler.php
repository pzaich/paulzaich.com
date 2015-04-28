<?php
// Our include
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');

// Our variables
$numPosts = (isset($_GET['numPosts'])) ? $_GET['numPosts'] : 0;
$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
query_posts(array(
	   'cat' 			=> 71,
       'posts_per_page' => $numPosts,
       'paged'          => $page
));
?>
<?php $left = true; ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : ?>
		
			<?php include (TEMPLATEPATH . '/_/inc/jsloop.php' ); ?>
		
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
<?php endif; ?>			
