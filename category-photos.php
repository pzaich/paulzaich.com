
<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php single_cat_title(); ?></h1>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1 class="pagetitle">Author Archive</h1>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1 class="pagetitle">Blog Archives</h1>

			<?php } ?>
			<div class="floatleft archive-container">
			<?php while (have_posts()) : the_post(); ?>

				<?php if (yapb_is_photoblog_post()): ?>

					<article <?php post_class('archive-photo-container') ?> >
						<?php $img_title = get_the_title(); ?>
							<a class="archive-thumb" href="<?php the_permalink() ?>"><?php yapb_thumbnail('', array('alt' => $img_title), '', array('w=210','h=140', 'zc=1', 'q=90')); ?></a>
							<h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
							<?php sfc_like_button(); ?>
					</article>
				<?php else: ?>
					<article <?php post_class() ?> >
						<div class="entry-content">
							<h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

								<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

								<div class="entry">
									<?php the_excerpt(); ?>
								</div>
						</div>
					</article>
					<div class="clear"></div>
				<?php endif; ?>

			<?php endwhile; ?>
			</div>
			<div class="clear"></div>
	<?php else : ?>

		<h1>Nothing found</h1>

	<?php endif; ?>


<?php get_footer(); ?>
