<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="page" id="page-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>


			<div class="entry-content">			

				<?php the_content(); ?>

			</div>

			<!--<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>-->

		</article>
		

		<?php endwhile; endif; ?>

<?php get_footer(); ?>
