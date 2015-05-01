<?php get_header(); ?>
	<div class='mobile-hidden'>
		<?php get_sidebar(); ?>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="main-col">
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php if (yapb_is_photoblog_post()): ?>
					<?php include (TEMPLATEPATH . '/_/inc/photo-area.php' ); ?>
				<?php else: ?>
					<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
					<div class="entry-content <?php if (yapb_is_photoblog_post()): echo 'photo'; endif; ?>">
						<?php the_content(); ?>
						<?php the_tags('<ul class="tags"><li>','</li><li>','</li><div class="clear"></div></ul>'); ?>
					</div>

				<?php endif; ?>
				<div class="clear"></div>
			</article>

			<?php comments_template(); ?>
		</section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>