<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<?php if (yapb_is_photoblog_post()): ?>
				<?php include (TEMPLATEPATH . '/_/inc/photo-area.php' ); ?>
			<?php else: ?>
				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
				<div class="entry-content <?php if (yapb_is_photoblog_post()): echo 'photo'; endif; ?>">
					<?php the_content(); ?>
				</div>
				<?php the_tags('<ul class="tags"><h3>Tags</h3><li>','</li><li>','</li><div class="clear"></div></ul>'); ?>
			<?php endif; ?>
			<div class="clear"></div>
		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>


<?php get_footer(); ?>