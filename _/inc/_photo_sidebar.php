<div id="sidebar">
  <h2>Photo Albums</h2>

  <?php if (is_category()): ?>

    <ul class="album">
  <?php wp_list_categories('&title_li=&show_count=1&child_of=19'); ?>
    </ul>
  <?php endif; ?>
</div>