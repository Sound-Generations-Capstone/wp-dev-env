<?php

/**
 * Template Name: Volunteer Search
 * 
 * @package Sound_Generations
 */
get_header(); ?>

<style>
  .display-flex {
    display: flex;
  }

  .flex-column {
    flex-direction: column;
  }
</style>

<section id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <h1 class="page-title"><?php the_title(); ?></h1>

    <form method="post" class="display-flex" style="gap: 1rem">
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
      $output .= '<ul>';
      while ($query->have_posts()) {
        $query->the_post();
        $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
      }
      $output .= '</ul>';
      wp_reset_postdata();
    } else {
      $output .= 'No posts found.';
    }

    echo $output;
    ?>
  </main>
</section>

<?php
get_sidebar();
get_footer();
?>