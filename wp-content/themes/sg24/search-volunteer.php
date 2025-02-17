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
  <form method="get" action="" id="search-volunteer-form">
    <fieldset>
      <legend>Filters</legend>
      <div id="filter-tags"></div>
      <div>
        <input type="text" id="filter-input">
        <button type="button" onclick="addFilter()">Add</button>
      </div>
    </fieldset>

    <input type="hidden" name="filters" id="filters" value="">
    <button type="submit">Search</button>
  </form>

  <script>
    const getInputEl = () => document.getElementById("filter-input");
    const getTagsContainer = () => document.getElementById("filter-tags");
    const getFiltersEl = () => document.getElementById("filters");

    function getSelectedFilters() {
      let spans = Array.from(getTagsContainer().getElementsByTagName("span"));
      return spans.map((span) => {
        return span.textContent.replace(" ✖", "");
      });
    }

    function setSelectedFiltersStr(value) {
      getFiltersEl().value = value;
    }

    function addToSelectedFiltersStr(filter) {
      let selectedFilters = getSelectedFilters();
      selectedFilters.push(filter);
      setSelectedFiltersStr(selectedFilters.join(","));
    }

    function removeFromSelectedFiltersStr(filter) {
      let selectedFilters = getSelectedFilters();
      selectedFilters = selectedFilters.filter(filters => filters != filter);
      setSelectedFiltersStr(selectedFilters.join(","));
    }

    function createSpan(value) {
      let tag = document.createElement("span");
      tag.textContent = value + " ✖";
      tag.style.marginRight = "5px";
      tag.style.cursor = "pointer";
      tag.style.borderStyle = "dotted";
      tag.addEventListener("click", function() {
        tag.remove();
        removeFromSelectedFiltersStr(value);
      });
      return tag;
    }

    function addFilter() {
      let value = getInputEl().value.trim();
      let selectedFilters = getSelectedFilters();

      if (value && !selectedFilters.includes(value)) {
        addToSelectedFiltersStr(value);
        let span = createSpan(value);
        getTagsContainer().appendChild(span);
        getInputEl().value = "";
      }
    }

    document.addEventListener("DOMContentLoaded", function() {
      let searchParams = new URLSearchParams(window.location.search);
      let filters = searchParams.get("filters");
      if (filters) {
        setSelectedFiltersStr(filters);
        filters.split(",").forEach((filter) => {
          let span = createSpan(filter);
          getTagsContainer().appendChild(span);
        });
      }
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
    echo "<div id='search-volunteer-results'>";
    while ($query->have_posts()) {
      $query->the_post();
  ?>
      <details>
        <summary> <?php the_title(); ?> </summary>
        <?php the_content(); ?>
      </details>
<?php
    }
    echo '</div';
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