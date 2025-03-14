<?php

/**
 * Template Name: Food Security
 * 
 * Usage: select this template when working in the WordPress block editor to load it as
 * the appearance, structure, and content for a page.
 * 
 * @package Sound_Generations
 */

get_header();
?>

<div class="page-content">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center"><strong>Fight Hunger, Foster Community Support</strong></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Sound Generations provides food security to thousands of individuals throughout King County. We fight hunger by providing nutritious and convenient meals for older adults and adults with disabilities in need. In addition to providing reliable food security, our people connect clients to community resources and social support networks, so they may live ample and fulfilled lives.</p>
    <!-- /wp:paragraph -->

    <!-- wp:cover {"overlayColor":"purpledrk","isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-purpledrk-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size"><strong>Community Dining</strong></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><strong>Community Dining</strong>&nbsp;is a network of different locations throughout King County, where older adults can enjoy a hot lunch with others. Many locations provide lunch five days a week and give participants the opportunity to engage with their local community.</p>
    <!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri()) . '/img/Community-Dining-Lake-City-2019-5_small-982x655.jpg' ?>" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
    <p>Meals are donation-based and prepared from scratch. We encourage a donation of $3 to $5 for older adults over 60, and guests under 60 are asked to make a $10 contribution.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
    <p class="has-white-color has-text-color has-link-color dark-background"><a href="https://soundgenerations.org/our-programs/food-security/community-dining/">Visit our <strong>Community Dining</strong> page for more information.</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:cover -->

    <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size"></p>
    <!-- /wp:paragraph -->

    <!-- wp:cover {"overlayColor":"orangedrk","isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-orangedrk-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
    <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color">Meals on Wheels</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p><strong>Meals on Wheels&nbsp;</strong>brings nutritious, frozen meals directly to the homes of qualifying older adults who have difficulty shopping or preparing food. Our friendly staff and volunteers pack and deliver the meals, ensuring their food needs are met.</p>
    <!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri()) . '/img/Fai-with-Meals-On-Wheels-1-rectangle-982x655.jpg' ?>" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
    <p>Clients can order up to 14 meals each week and choose from 30 menu items that meet their individual nutritional needs. </p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
    <p class="has-white-color has-text-color has-link-color light-background"><a href="https://soundgenerations.org/our-programs/food-security/meals-on-wheels/">Visit our<strong> Meals on Wheel</strong>s page for more information.</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:cover -->

    <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size"></p>
    <!-- /wp:paragraph -->
</div>
<?php
get_footer();
?>