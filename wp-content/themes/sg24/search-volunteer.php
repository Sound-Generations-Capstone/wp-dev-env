<?php

/**
 * Template Name: Volunteer Search
 * 
 * @package Sound_Generations
 */

function volunteer_search_form()
{
  ob_start();
?>
  <form method="get" action="">
    <label>Filters:</label>
    <input type="text" id="filter-input" placeholder="Type and press space to add filters">
    <div id="filter-tags"></div>
    <input type="hidden" name="filters" id="filters" value="">

    <button type="submit">Filter</button>
  </form>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let input = document.getElementById("filter-input");
      let filters = document.getElementById("filters");
      let tagsContainer = document.getElementById("filter-tags");
      let selectedFilters = [];

      input.addEventListener("keydown", function(event) {
        if (event.key === " ") {
          event.preventDefault();
          let value = input.value.trim();
          if (value && !selectedFilters.includes(value)) {
            selectedFilters.push(value);
            filters.value = selectedFilters.join(",");
            let tag = document.createElement("span");
            tag.textContent = value + " ✖";
            tag.style.marginRight = "5px";
            tag.style.cursor = "pointer";
            tag.addEventListener("click", function() {
              selectedFilters = selectedFilters.filter(f => f !== value);
              filters.value = selectedFilters.join(",");
              tag.remove();
            });
            tagsContainer.appendChild(tag);
            input.value = "";
          }
        }
      });
    });
  </script>

  <?php
  // Prepare search query
  $args = array(
    'post_type'      => 'post',
    'posts_per_page' => -1,
    'category_name'  => 'volunteer-opportunities',
    's'              => '',
  );

  if (isset($_GET['filters'])) {
    $args['s'] = implode(' ', explode(',', $_GET['filters'])); // split by , -> then join
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
  <?php echo do_shortcode("[volunteer_search_form]") ?>
</div>

<?php
get_sidebar();
get_footer();
?>