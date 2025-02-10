<?php

/**
 * Template Name: Volunteer Search
 * 
 * @package Sound_Generations
 */

function generate_dropdown($name, $options, $selected_value)
{
  echo '<select name="' . esc_attr($name) . '">';
  echo '<option value="">Any</option>';
  foreach ($options as $option) {
    echo '<option value="' . esc_attr($option) . '" ' . selected($selected_value, $option, false) . '>' . esc_html($option) . '</option>';
  }
  echo '</select>';
}

function volunteer_search_form()
{
  ob_start();

  // Define dropdown options (customize as needed)
  $locations = ['Renton', 'Seattle', 'Bellevue', 'Tacoma'];
  $durations = ['Ongoing', 'On-going', 'Short-term', 'Long-term', 'One-time'];
  $schedules = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

  // Get selected values
  $selected_location = isset($_GET['location']) ? sanitize_text_field($_GET['location']) : '';
  $selected_duration = isset($_GET['duration']) ? sanitize_text_field($_GET['duration']) : '';
  $selected_schedule = isset($_GET['schedule']) ? sanitize_text_field($_GET['schedule']) : '';
?>
  <form method="get" action="">
    <label>Location:</label>
    <?php generate_dropdown('location', $locations, $selected_location) ?>

    <label>Duration:</label>
    <?php generate_dropdown('duration', $durations, $selected_duration) ?>

    <label>Schedule:</label>
    <?php generate_dropdown('schedule', $schedules, $selected_schedule) ?>

    <button type="submit">Filter</button>
  </form>
  <?php
  // Prepare search query
  $args = array(
    'post_type'      => 'post',
    'posts_per_page' => -1,
    'category_name'  => 'volunteer-opportunities',
    's'              => '',
  );

  // Build search string from selected filters
  $search_terms = [];
  if ($selected_location) {
    $search_terms[] = 'Location: ' . $selected_location;
  }
  if ($selected_duration) {
    $search_terms[] = 'Duration: ' . $selected_duration;
  }
  if ($selected_schedule) {
    $search_terms[] = 'Schedule: ' . $selected_schedule;
  }

  if (!empty($search_terms)) {
    $args['s'] = implode(' ', $search_terms); // Search within post content
  }

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    echo "<ul>";
    while ($query->have_posts()) {
      $query->the_post();
  ?>
      <li>
        <strong>Program:</strong> <?php the_title(); ?><br>
        <strong>Details:</strong> <?php the_content(); ?>
      </li>
      <hr>
<?php
    }
    echo "</ul>";
  } else {
    echo "<p>No volunteer opportunities match your criteria.</p>";
  }
  wp_reset_postdata();

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