<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @package Sound_Generations
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
        <?php if ( is_single() ) { ?>
            <h1><?php the_title(); ?></h1>
        <?php } else { ?>
        <?php $myLink = get_my_url(); ?>
            <h2 class="entry-title"><a href="<?php echo $myLink; ?>"><?php echo the_title(); ?></a></h2>
        <?php } ?>
        
		<?php
			if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php sg20_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
        </header><!-- .entry-header -->
        
		<?php if ( is_single() ) : ?>
 			<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lifewire' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lifewire' ),
					'after'  => '</div>',
				) );
			?>
			</div><!-- .entry-content -->
	    <?php endif; ?>
    
    	<footer class="entry-footer">
		<?php sg20_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article> <!-- #post-## -->
