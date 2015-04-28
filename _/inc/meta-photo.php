<section class="meta">
	<span class="label">Album:</span> <span class="cat"><?php $category = get_the_category(); ?>
	<?php if($category[0]): ?><?php echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'?><?php endif?></span>
	<span class="label date">Taken on:</span> <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
	<span class="byline author vcard">
		<!--<i>by</i> <span class="fn"><?php //the_author() ?></span>-->
	</span>
	<?php sfc_like_button(); ?>
	<?php //comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
</section>