<div id="sidebar" class="mobile-hidden">
  <?php include (TEMPLATEPATH . '/_/inc/_me.php' ); ?>
  <h4>Photo Albums</h4>

  <?php if (is_category()): ?>

    <ul class="album">
  <?php wp_list_categories('&title_li=&show_count=1&child_of=19'); ?>
    </ul>
  <?php endif; ?>
</div>