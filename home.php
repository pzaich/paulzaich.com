<?php
    /* Template Name: new homepage */
    get_header();
    $page = get_query_var( 'page' );
  	$args = array( 'posts_per_page' => '5', 'cat' => '141', 'paged' => $page );
  	$query = new WP_Query( $args );

?>
<div class='mobile-hidden'>
  <?php get_sidebar(); ?>
</div>
<div class="main-col">
	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

		</article>

	<?php endwhile;
				endif;
				wp_reset_postdata();
	?>

	<a href="/blog">More >></a>
</div>
<?php get_footer(); ?>