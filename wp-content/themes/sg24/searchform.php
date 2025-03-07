<?php
/* Custom search form */
?>
<form role="search" method="get" id="global-search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <div class="input-group">
    <label>
      <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'sg20'); ?></span>
      <input
        type="search"
        class="form-control border-0"
        placeholder="Search..."
        aria-label="search Sound Generations" name="s"
        id="search-input"
        value="<?php echo get_search_query(); ?>">
      </input>
    </label>
    <?php if (!empty($_GET['category_name'])) : ?>
      <input type="hidden" name="category_name" value="<?php echo esc_attr($_GET['category_name']); ?>">
    <?php endif; ?>
    <button type="submit" class="search-submit"><?php echo esc_html_x('Search', 'submit button', 'sg20'); ?></button>
  </div>
</form>