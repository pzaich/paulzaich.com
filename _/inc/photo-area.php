<?php $img_title = get_the_title(); ?>
<?php include (TEMPLATEPATH . '/_/inc/meta-photo.php' ); ?>
<?php $exif = yapb_get_exif(true); ?>
<?php if( $exif['Height'] > $exif['Width']): ?>
	<?php yapb_thumbnail('<div class="post-image-container">', array('alt' => $img_title), '</div>', array('h=800', 'q=90')); ?>
<?php else: ?>
	<?php yapb_thumbnail('<div class="post-image-container">', array('alt' => $img_title), '</div>', array('w=948', 'q=90')); ?>
<?php endif; ?>
<?php if($post->post_content !="") : ?>
	<div class="entry-container">
		<div class="triangle-comment"></div>
		<div class="entry-content <?php if (yapb_is_photoblog_post()): echo 'photo'; endif; ?>">
			<h3>Description</h3>
			<?php the_content(); ?>
		</div>
	</div>
<?php else: ?>
	<div class="entry-container">
	</div>
<?php endif; ?>

<?php if(has_tag()): ?>
	<?php the_tags('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
	<!--<?php edit_post_link('Edit this entry','','.'); ?>-->
<?php endif; ?>