<?php

/**
 * Template Name: Assistance Services
 *
 * Usage: Copy this code into a WordPress block editor
 * to preserve desired styles.
 * 
 * @package Sound_Generations
 */

get_header();
?>
  <header class="has-purpledrk-background-color banner aligncenter">
      <h1 class="has-white-color">Assistance Services Hub</h1>
      <p>We provide assistance services for older adults, adults with disabilities, and individuals who love and care for them. We also offer free to low-cost solutions for those seeking to utilize their community resources.</p>
  </header> 
  <main class="card-container">
        <a class="pathways service-card" href="<?php echo get_permalink(get_page_by_path('our-programs/pathways-information-assistance'))?>" data-testid="pathways-link">
            <?php $pathways_information_image_data = wp_get_attachment_image_src(16065) ?>
            <img src="<?php echo get_template_directory_uri() . '/img/Pathways-IA.png'?>" alt=""/><br/>
            Pathways and Information Assistance
        </a>
        <a class="caregiver-support service-card strong" href="<?php echo get_permalink(get_page_by_path('our-programs/caregiver-support'))?>" data-testid="caregiver-support-link">
            <?php $caregiver_support_image_data = wp_get_attachment_image_src(16061) ?>
            <img src="<?php echo get_template_directory_uri() . '/img/Caregiver-Support-Icon_grey-655x655.png'?>" alt=""/><br/>
            Caregiver Support
        </a>
        <a class="legal service-card" href="<?php echo get_permalink(get_page_by_path('our-programs/senior-rights-assistance/'))?>" data-testid="legal-assistance-link">
            <?php $senior_rights_assistance_image_data = wp_get_attachment_image_src(16066) ?>
            <img src="<?php echo get_template_directory_uri() . '/img/SRA-icon-655x655.png'?>" alt=""/><br/>
            Legal Assistance
        </a>
        <a class="minor-home-repair service-card" href="<?php echo get_permalink(get_page_by_path('assistance-services/minor-home-repair'))?>" data-testid="minor-home-repair-link">
            <?php $home_repair_image_data = wp_get_attachment_image_src(16064) ?>
            <img src="<?php echo get_template_directory_uri() . '/img/Minor-Home-Repair-Icon-BW-654x655.png'?>" alt=""/><br/>
             Minor Home Repair
        </a>
      <a class="elder-education service-card" href="<?php echo get_permalink(get_page_by_path('/eldereducationinstitute'))?>" data-testid="elder-education-institute-link">
            <?php $elder_education_image_data = wp_get_attachment_image_src(16062) ?>
            <img src="<?php echo get_template_directory_uri() . '/img/elder-education-institute-655x655.png'?>" alt=""/><br/>
            Elder Education Institute
        </a>
        <a class="grat service-card" href="<?php echo get_permalink(get_page_by_path('our-programs/grat'))?>" data-testid="grat-link">
            <?php $grat_image_data = wp_get_attachment_image_src(16063) ?>
            <img src="<?php echo get_template_directory_uri() . '/img/GRAT-648x655.png'?>" alt=""/> <br/>
            Geriatric Regional Assessment Team
        </a>
    </main>
<?php get_footer(); ?>