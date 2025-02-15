<?php

/**
 * Template Name: Caregiver Support
 *
 * Usage: Copy this code into a WordPress block editor
 * to preserve desired styles.
 * 
 * @package Sound_Generations
 */

get_header();
?>
<header class="has-purple-background-color banner aligncenter">
      <h1 class="has-white-color">
        Caregiver Support
      </h1>
      <p>
        Our Caregiver advocates offer free, confidential and personalized services to unpaid caregivers residing in King County who are caring for an adult 18 years old or older.
      </p>
</header> 
<main>
  <article class="card-container caregiver-support-menu">
    <section class="caregiver-card">
      <?php $caregiver_support_image_data = wp_get_attachment_image_src(16067) ?>;
      <img src="wp-content/themes/sg24/img/caregiver-support.png" alt="Caregiver and care recipient sitting next to each other on a sofa."/>
      <p>
        Whether you do the grocery shopping for your parents, run errands for a neighbor, or are caring for a spouse with a chronic condition, we are here for you. 
      </p>
      <a href="#all-caregivers" class="outline-link">
        Resources for non-veteran caregivers
      </a>
    </section>
    <section class="caregiver-card">
      <?php $veteran_caregiver_support_image_data = wp_get_attachment_image_src(16069) ?>;
      <img src="wp-content/themes/sg24/img/veteran-caregiver-support.png" alt="Veteran care recipient and caregiver look upon a body of water standing side by side."/>
      <p>
        The Veteran Caregiver Support Program focuses on the specific needs of the veteran community in King County.
      </p>
      <a href="#veteran-caregiver-support" class="outline-link">
        Resources for Veteran caregivers
      </a>
    </section>
  </article>
    <h2 class="has-black-color article-header">
      Community Outreach
    </h2>
    <article class="community-outreach">
      <section class="community-outreach-info">
        <h3 class="has-white-color section-header">Caregiver advocates are also available to do community outreach, education, and coordination, and coordination with service providers.</h3>
        <p>
          Contact us to schedule a workplace or community presentation on:
        </p>
        <ul>
          <li>
            Caregiver resources
          </li>
          <li>
            Long-distance caregiving
          </li>
          <li>
            Paying for care
          </li>
          <li>
            LGBTQ+ caregiving
          </li>
        </ul>
        <a class="outline-link aligncenter" href="<?php echo esc_url("mailto:caregiver@soundgenerations.org")?>">
          Email us to schedule a presentation
        </a>
      </section>
      <?php $presentation_image_data = wp_get_attachment_image_src(16068) ?>;
      <img class="presentation-image" src="wp-content/themes/sg24/img/presentation-example-placeholder.jpg">/>
    </article>
    <h2 class="has-black-color article-header">
      Resources for All Caregivers
    </h2>
  </article>
  <article id="all-caregivers" class="caregiver-resources large-cards"> 
    <section class="large-card has-purple-background-color">
      <a href="<?php echo esc_url("mailto:caregiver@soundgenerations.org")?>" class="outline-link">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <title>Email</title>
          <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" />
      </svg>Caregiver Support
      </a>
    </section>
      <section class="call-caregiver-support large-card has-purple-background-color">
        <a href="<?php echo esc_url("tel:+12064483110")?>" class="outline-link">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
            <title>Call</title>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
          </svg>Caregiver Support
        </a>
        <a href="<?php echo esc_url("tel:+18008336384")?>" class="outline-link">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
            <title>Call</title>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
          </svg>
          WA Relay 711 for TTY
        </a>
        <a href="<?php echo esc_url("tel:+18884353377")?>" class="outline-link">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
            <title>Call</title>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
          </svg>
          Caregiver Support (Toll-free)
        </a>
      </section>
      
    <section class="small-cards">
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('our-programs/caregiver-support/respite-services')))?>" class="outline-link">
        Learn about Respite Services
      </a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('our-programs/caregiver-support/support-groups-workshops-caregivers/')))?>" class="outline-link">
        Find our support groups and workshops
      </a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('tag/the-heart-of-caregiving')))?>" class="outline-link">
        Read caregiver stories and insights
      </a>
      <a href="<?php echo esc_url("https://www.alz.org/help-support/resources/helpline")?>" class="outline-link">
        Alzheimer’s Association Hotline
      </a>
      <a href="<?php echo esc_url("https://soundgenerations.org/wp-content/uploads/sageusa-how-to-prepare-for-lgbt-caregiving-guide-with-aarp.pdf")?>" class="outline-link">
        View our LGBTQ+ caregiver guide
      </a>
      <a href="<?php echo esc_url(get_permalink("our-programs/caregiver-support/caregiver-self-assessment/"))?>" class="outline-link">
        View caregiver self-assessment information
      </a>
    </section>
  </article>
  <h2 class="has-black-color article-header">
    Resources for Veteran Caregivers
  </h2>
  <article id="veteran-caregiver-support" class="veteran-caregiver-resources large-cards">
    <section class="large-card has-purpledrk-background-color">
      <a href="<?php echo esc_url("mailto:reynaldc@soundgenerations.org")?>" class="outline-link has-purpledrk-background-color">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <title>Email</title>
            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" />
        </svg>Veteran Caregiver Support
      </a>
    </section>
      <section class="large-card has-purpledrk-background-color">
        <a href="<?php echo esc_url("tel:+12063855050")?>" class="outline-link ">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
              <title>Call</title>
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            </svg>Veteran Caregiver Support
        </a>
      </section>
    <section class="small-cards">
      <a href="<?php echo esc_url("https://www.caregiver.va.gov/")?>" class="outline-link has-purpledrk-background-color">
        US Department of Veteran Affairs Caregiver Support 
      </a>
      <a href="<?php echo esc_url("tel:+18774243838")?>" class="outline-link has-purpledrk-background-color">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
            <title>Call</title>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
        </svg>
        National Call Center for Homeless Veterans
      </a>
      <a href="<?php echo esc_url("tel:+18002738255")?>" class="outline-link has-purpledrk-background-color">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
              <title>Call</title>
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
          </svg>
        Veteran Crisis Line (press 1 after dialing)
      </a>
      <a href="<?php echo esc_url("tel:+18552603274")?>" class="outline-link has-purpledrk-background-color">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
            <title>Call</title>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
        </svg>
        VA Caregiver Support (Toll-Free)
      </a>
    </section>
  </article>
</main>
<?php 
get_footer();
?>