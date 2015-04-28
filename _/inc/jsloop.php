<?php $post_counter++; ?>
<?php if ($post_counter % 3 === 1): ?>
	
	<section class="ajax-homescreen clearfix <?php if ($left == true): echo 'left'; $left = false; else: echo 'right';  endif; ?>">
	<?php the_post(); ?>
	<article <?php post_class('large') ?> 	
		<?php $img_title = get_the_title(); ?>
			<a class="archive-thumb" href="<?php the_permalink() ?>"><?php yapb_thumbnail('', array('alt' => $img_title), '', array('w=642','h=428', 'zc=1', 'q=90')); ?></a>
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	</article>
<?php elseif ($post_counter % 3 === 2): ?>
		<div class="column">
	<?php the_post(); ?>
		<article <?php post_class('small top') ?> >
			<?php $img_title = get_the_title(); ?>
				<a class="archive-thumb" href="<?php the_permalink() ?>"><?php yapb_thumbnail('', array('alt' => $img_title), '', array('w=300','h=200', 'zc=1', 'q=90')); ?></a>
				<h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
		</article>
<?php else: ?>
	<?php the_post(); ?>
		<article <?php post_class('small') ?> >
			<?php $img_title = get_the_title(); ?>
				<a class="archive-thumb" href="<?php the_permalink() ?>"><?php yapb_thumbnail('', array('alt' => $img_title), '', array('w=300','h=200', 'zc=1', 'q=90')); ?></a>
				<h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
		</article>
		</div>
	
	</section>
<?php endif; ?>