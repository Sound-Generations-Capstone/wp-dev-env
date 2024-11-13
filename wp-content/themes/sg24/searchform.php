<?php
/* Custom search form */
?>
<form role="search" method="get" id="global-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="input-group">
    <input 
      type="search" 
      class="form-control border-0"
      placeholder="Search..." 
      aria-label="search Sound Generations" name="s" 
      id="search-input" 
      value="<?php echo get_search_query(); ?>"
      >
    </input>
  </div>
</form>