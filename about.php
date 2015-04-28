<?php  
/* Template Name: About */   
get_header();
 ?>  

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="page" id="page-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>
			

			<!--<ul class="skills">
				<li>Fireworks</li>
				<li>Photoshop</li>
				<li>Balsamic</li>
				<li>Wordpress</li>
				<li>CSS</li>
				<li>JQuery</li>
				<li>PHP</li>
				<li>Ruby</li>
				<li>Ruby on Rails<span class="soon">Soon</span></li>
				<li>Rspec<span class="soon">Soon</span></li>
				<li>Cucumber<span class="soon">Soon</span></li>
				<li>Git</li>
			</ul>-->
			<div class="entry-content">			

				<?php the_content(); ?>

			</div>

			<!--<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>-->

		</article>
		

	<?php endwhile; endif; ?>

<?php get_footer(); ?>



