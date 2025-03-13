<?php
/**
 * Template Name: News Center
 * 
 * @package Sound_Generations
 */
get_header();
?>
<h1 class="has-text-align-center"><strong>Sound Generations News</strong></h1>
<?php
  function recent_bonus_news($attributes) {
    ob_start();
    $query_attributes = shortcode_atts(array('offset' => 0, 'paged' => false, 'posts_per_page' => 3, 'more' => false), $attributes);
    $newsletters_query = new WP_query(array(
    'category_name' => 'e-news-bonus-content', 
    'posts_per_page' => $query_attributes['posts_per_page'],
    'order_by' => 'date',
    'order' => 'DESC',
    'offset' => $query_attributes['offset'],
    'paged' => $query_attributes['paged']
    ));

    $output = '<div class="card-grid news-grid">';
    if ($newsletters_query->have_posts()) {
      while($newsletters_query->have_posts()) {
        $newsletters_query->the_post();
        $output .= '
        <article class="post-card display-flex flex-column justify-content_center">
          <div class="post-card__content justify-content_center has-text-align-center">
            <h3 class="post-card__title">
               ' . esc_html(get_the_title()) . '
            </h3>
            <a href="' . get_permalink() . '" class="post-card__link extra-large" data-testid="news-card-read-more">Read More</a>
          </div>
        </article>';
      }
        $output .= '</div>';
    } else {
      $output .= 'No news found. Come back later!';
    }
    wp_reset_postdata();
    echo $output;
    return ob_get_clean();
  }

  add_shortcode('recent_bonus_news', 'recent_bonus_news');
?>

<div class="e-news-signup has-wide-width has-text-align-center display-flex flex-column justify-content_center">
  <h2 class="">Sign up for E-News</h2>
  <p> 
    Get the latest news from Sound Generations, and stay in the know about upcoming community events.
  </p>
  <!-- Gravity forms button here-->
  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-buttons subscribe-group"><!-- wp:button {"backgroundColor":"orangedrk","width":50} -->
  <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="has-background subscribe" href="http://eepurl.com/dIh9Xf" data-testid="subscribe-enews">Subscribe</a></div>
  <!-- /wp:button --></div>
  <!-- /wp:buttons -->
</div>
<div class="display-flex justify-content_center">
  <a class="wp-block-button__link wp-element-button jump-to has-text-align-center" href="#more-news">View bonus Sound Generations news</a>
</div>
<!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color featured-news"><strong>Featured News</strong></h2>
<!-- /wp:heading -->
<a href="https://www.seattletimes.com/seattle-news/readers-donate-2-9m-to-the-seattle-times-fund-for-those-in-need/" class="external-news" rel="nofollow" target="_blank">
  <div class="wp-block-visual-link-preview-link has-purpledrk-background-color display-flex flex-column"><img class="vlp-image" src="<?php echo esc_url(get_template_directory_uri()) . '/img/02022024_Sound_Generations_115756_png.png'?>"/><h3 class="has-white-color">Readers donate $2.9M to The Seattle Times Fund for Those in Need</h3><div class="summary">Responding from far and wide to the call to help, Seattle Times readers donated more than $2.9 million to the latest Fund for Those in Need campaign.</div></div>
</a>
<div class="wp-block-visual-link-preview-link has-purpledrk-background-color display-flex flex-column"><img class="vlp-image" src="<?php echo esc_url(get_template_directory_uri()) . '/img/12052023_caregivers_sound-generations_114138_png.png'?>"/><h3 class="has-white-color">Care for caregivers: Sound Generations aims to help in King County</h3><div class="summary">For caregivers, people who provide life-sustaining services to their loved ones, a moment of meditation may be the only stillness in their day. </div></div>
<!-- /wp:visual-link-preview/link -->

<h2 id="more-news" class="has-text-align-center"><strong>More News</strong></h2>
<?php echo do_shortcode('[recent_bonus_news posts_per_page=9 offset=0 paged=true more=true]'); ?>
<?php
get_footer();
?>