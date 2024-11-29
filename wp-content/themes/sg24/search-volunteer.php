<?php

/**
 * Template Name: Volunteer Search
 * 
 * @package Sound_Generations
 */

// Shortcode for displaying volunteer search form
function volunteer_search_form() {
  ob_start(); 
  ?>
  <form method="post" class="volunteer-search-form display-flex" style="gap: 1rem">
    <div class="display-flex flex-column">
      <label for="location">Location</label>
      <select name="location">
        <option selected value="">All</option>
        <?php
        $map = array(
          'Renton' => 'Renton',
          'SeaTac' => 'SeaTac',
          'Federal Way' => 'Federal Way',
          'Burien' => 'Burien',
        );

        $location = '';
          if (isset($_POST['location'])) {
            $location = $_POST['location'];
          }

          $output = '';
          foreach ($map as $key => $value) {
            $selected = ($key == $location) ? ' selected' : '';
            $output .= '<option value="' . $value . '"' . $selected . '>' . $key . '</option>';
          }
          echo $output;
        ?>
      </select>
    </div>

    <div class="display-flex flex-column">
        <label for="kid-friendly">Kid Friendly</label>
        <select name="kid-friendly">
          <option selected value="">Either</option>
          <?php
          $map = array(
            'Yes' => 'Yes',
            'No' => 'No',
          );

          $kid_friendly = '';
          if (isset($_POST['kid-friendly'])) {
            $kid_friendly = $_POST['kid-friendly'];
          }

          $output = '';
          foreach ($map as $key => $value) {
            $selected = ($key == $kid_friendly) ? ' selected' : '';
            $output .= '<option value="' . $value . '"' . $selected . '>' . $key . '</option>';
          }
          echo $output;
          ?>
      </select>
    </div>
    <button type="submit">Search</button>
  </form>
  <?php

  // Handle search results
  $location = '';
    if (isset($_POST['location'])) {
      $location = 'Location: ' . $_POST['location'];
    }

    $kid_friendly = '';
    if (isset($_POST['kid-friendly'])) {
      $kid_friendly = 'Kid Friendly: ' . $_POST['kid-friendly'];
    }

    $query = new WP_Query(array(
      'category_name' => 'volunteer-opportunities',
      's' => $location . ' ' . $kid_friendly
    ));

    $output = '';
    if ($query->have_posts()) {
      $output .= '<div class="posts-grid">';
      while ($query->have_posts()) {
        $query->the_post();
        $excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content());
        $date = get_the_date('F j, Y');

        $output .= '
        <article class="post-card">
          <div class="post-card__content">
            <h3 class="post-card__title">
                <a href="' . get_permalink() . '">' . get_the_title() . '</a>
            </h3>
            <div class="post-card__meta">
                <span class="post-card__date">' . $date . '</span>
            </div>
            <div class="post-card__excerpt">
                ' . $excerpt . '
            </div>
            <a href="' . get_permalink() . '" class="post-card__link">Read More</a>
          </div>
        </article>';
      }
      $output .= '</div>';
      wp_reset_postdata();
    } else {
      $output .= 'No posts found.';
    }

    echo $output;

  return ob_get_clean(); 
}

add_shortcode('volunteer_search_form', 'volunteer_search_form');

get_header(); ?>


<!-- Display page content -->
<div class="page-content">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      the_content(); 
    endwhile;
  endif;
  ?>
</div>





<?php
get_sidebar();
get_footer();
?>