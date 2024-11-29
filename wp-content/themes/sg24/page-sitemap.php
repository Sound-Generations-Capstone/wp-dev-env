<?php

/**
 * Template Name: Sitemap
 * 
 * @package Sound_Generations
 */

get_header();
?>

<h1 class="wp-block-post-title" id="sitemap-title"><?php the_title(); ?></h1>
<?php
echo do_shortcode('[html_sitemap id="sitemap-ul"]');
?>

<style>
  @media screen and (min-width: 60em) {
    #sitemap-title, #sitemap-ul {
      margin:auto;
      width: 50%;
    }
  }

  #sitemap-ul ul.children {
    margin-left: 0;
  }
</style>

<?php
get_footer();
?>