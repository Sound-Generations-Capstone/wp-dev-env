<?php

/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sound_Generations
 */

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		if (have_posts()) : ?>

			<header class="page-header">
				<?php if (!empty($_GET['category_name'])) : ?>
					<h1 class="page-title">Search Volunteer Opportunities</h1>
					<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
						<fieldset style="display:inline;width:80%">
							<legend>Filter Results</legend>
							<input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" style="width:100%" />
						</fieldset>
						<input type="hidden" name="category_name" value="volunteer-opportunities" />
						<button type="submit">Search</button>
					</form>
				<?php else : ?>
					<h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'sg20'), '<span>' . get_search_query() . '</span>'); ?></h1>
				<?php endif; ?>
			</header><!-- .page-header -->

		<?php
			/* Start the Loop */
			while (have_posts()) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part('template-parts/content', 'search');

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif; ?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
