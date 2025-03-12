<?php
if ( !$apply_content_filters ) { // Don't apply the content filter if checkbox selected
	$content = apply_filters( 'the_content', $content);
}
// var_dump($content_post);
// echo get_post_meta($content_post -> ID, "_content_block_information")[0];
// echo "Find call to action in description?: " . stripos(get_post_meta($content_post -> ID, "_content_block_information")[0],"Call to Action");
if (stripos(get_post_meta($content_post -> ID, "_content_block_information")[0],"Call to Action") !== false || get_post_meta($content_post -> ID, "type_of_content")[0] == "Call to Action") {
    
    echo $before_widget;
    if ( $show_featured_image ) {
        if (get_post_meta($content_post -> ID, "cta_button_link")[0]) {
            $imagelinkstart = '<a href="../sg24/' . get_post_meta($content_post -&gt; ID, "cta_button_link")[0] . '">';
            $imagelinkend = '</a>';
        }
        echo $imagelinkstart . get_the_post_thumbnail( $content_post -> ID, array( 300, 300), array( 'class' => 'alignleft','alt' => get_post_meta(get_post_thumbnail_id($content_post -> ID) , '_wp_attachment_image_alt', true), 'style' => 'width:300px;' ) ) . $imagelinkend;
    }
    if ( $show_custom_post_title ) {
        echo '<h2>' . apply_filters( 'widget_title',$content_post->post_title) . '</h2>';
    }
    echo do_shortcode( $content );
    if (get_post_meta($content_post -> ID, "cta_button_text")[0] && get_post_meta($content_post -> ID, "cta_button_link")[0]) {
        echo "\n<a class=\"button\" href=../sg24//&quot;&quot; . get_post_meta($content_post -> ID, "cta_button_link")[0] . "\">" . get_post_meta($content_post -> ID, "cta_button_text")[0] . "</a>";
        
    }
    echo $after_widget;
    
} elseif (get_post_meta($content_post -> ID, "type_of_content")[0] == "Sidebar Newsletter") {
    
    echo $before_widget;
    if ( $show_custom_post_title ) {
        $sideNewsletterTitle = apply_filters( 'widget_title',$content_post->post_title);
    } else {
        $sideNewsletterTitle = "Newsletters";
    }
    if (strpos( $_SERVER['HTTP_HOST'], 'test.soundgenerations.org') !== false) {
        var_dump(get_post_meta($content_post -> ID, "sidebar_newsletter_link"));
        echo wp_get_attachment_url(get_post_meta($content_post -> ID, "sidebar_newsletter_link")[0]);
    } 
    if (get_post_meta($content_post -> ID, "sidebar_newsletter_link")[0] || get_post_meta($content_post -> ID, "newsletter_link_2")[0]) {
        
        echo "<h4>" . $sideNewsletterTitle . "</h4>";
        if ($link1 = wp_get_attachment_url(get_post_meta($content_post -> ID, "sidebar_newsletter_link")[0])) {
            
            get_post_meta($content_post -> ID, "newsletter_link_text")[0] ? $linktext1 = get_post_meta($content_post -> ID, "newsletter_link_text")[0] : $linktext1 = "Current Newsletter";
            echo '<strong><a href="../sg24/' . $link1 . '">' . $linktext1 . '</a></strong><br />';
            
        }
        if ($link2 = wp_get_attachment_url(get_post_meta($content_post -> ID, "newsletter_link_2")[0])) {
            
            get_post_meta($content_post -> ID, "newsletter_link_text_2")[0] ? $linktext2 = get_post_meta($content_post -> ID, "newsletter_link_text_2")[0] : $linktext2 = "Upcoming Newsletter";
            echo '<strong><a href="../sg24/' . $link2 . '">' . $linktext2 . '</a></strong><br />';
            
        }
    }
    
    echo $after_widget;
    
} else {
    
    echo $before_widget;
    if ( $show_custom_post_title ) {
        echo $before_title;
        echo apply_filters( 'widget_title',$content_post->post_title);
        if ( $show_featured_image ) {
            echo get_the_post_thumbnail( $content_post -> ID );
        }
        echo $after_title; // This is the line that displays the title (only if show title is set)
    }
    echo do_shortcode( $content );
}

if (file_exists( get_stylesheet_directory(). "/custom-post-widget-{$content_post -> ID}.php")):
include( get_stylesheet_directory() ."/custom-post-widget-{$content_post -> ID}.php");

else:

endif; 

echo $after_widget;

