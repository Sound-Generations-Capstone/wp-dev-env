<?php
/**
 * Template part for displaying Calls To Action Widgets.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sound_Generations
 */

?>

	<?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
        <div class="site-cta">
    		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	    </div>
    	<!-- .site-cta -->
	<?php } ?>
				