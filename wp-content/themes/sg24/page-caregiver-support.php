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
    <section class="caregiver-card" data-testid="caregiver-support-card">
        <img src="<?php echo get_template_directory_uri() . '/img/caregiver-support.png' ?>" alt="Caregiver and care recipient sitting next to each other on a sofa."/>
      <p>
        Whether you do the grocery shopping for your parents, run errands for a neighbor, or are caring for a spouse with a chronic condition, we are here for you. 
      </p>
      <a href="#all-caregivers" class="outline-link" data-testid="jump-general-caregiver-support">
        Resources for non-veteran caregivers
      </a>
    </section>
    <section class="caregiver-card" data-testid="veteran-caregiver-support-card">
        <img src="<?php echo get_template_directory_uri() . '/img/veteran-caregiver-support.png' ?>" alt="Veteran care recipient and caregiver look upon a body of water standing side by side."/>
      <p>
        The Veteran Caregiver Support Program focuses on the specific needs of the veteran community in King County.
      </p>
      <a href="#veteran-caregivers" class="outline-link" data-testid="jump-veteran-caregiver-support">
        Resources for Veteran caregivers
      </a>
    </section>
  </article>
    <h2 class="has-black-color article-header">
      Community Outreach
    </h2>
    <article class="community-outreach" data-testid="community-outreach">
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
        <a class="outline-link aligncenter" data-testid="email-caregiver-support-presentation" href="<?php echo esc_url("mailto:caregiver@soundgenerations.org")?>">
          Email us to schedule a presentation
        </a>
      </section>
        <img class="presentation-image" src="<?php echo get_template_directory_uri() . '/img/presentation-example-placeholder.jpg'?>"/>
    </article>
    <h2 class="has-black-color article-header">
      Resources for All Caregivers
    </h2>
  </article>
  <article id="all-caregivers" class="caregiver-resources large-cards"> 
    <section class="large-card has-purple-background-color">
      <a href="<?php echo esc_url("mailto:caregiver@soundgenerations.org")?>" class="outline-link" data-testid="email-caregiver-support">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <title>Email</title>
          <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" />
      </svg>Caregiver Support
      </a>
    </section>
      <section class="call-caregiver-support large-card has-purple-background-color">
        <a href="<?php echo esc_url("tel:+12064483110")?>" class="outline-link" data-testid="call-caregiver-support">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
            <title>Call</title>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
          </svg>Caregiver Support
        </a>
        <a href="<?php echo esc_url("tel:+18008336384")?>" class="outline-link" data-testid="tty-caregiver-support">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
            <title>Call</title>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
          </svg>
          WA Relay 711 for TTY
        </a>
        <a href="<?php echo esc_url("tel:+18884353377")?>" class="outline-link"
        data-testid="toll-free-caregiver-support">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
            <title>Call</title>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
          </svg>
          Caregiver Support (Toll-free)
        </a>
      </section>
      
    <section class="small-cards">
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('our-programs/caregiver-support/respite-services')))?>" data-testid="respite-services" class="outline-link">
        Learn about Respite Services
      </a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('our-programs/caregiver-support/support-groups-workshops-caregivers/')))?>" data-testid="support-groups" class="outline-link">
        Find our support groups and workshops
      </a>
      <?php 
        $caregiver_story_tag = get_term_by('name', 'The Heart of Caregiving', 'post_tag');
        $caregiver_story_url = get_term_link($caregiver_story_tag);
      ?>
      <a href="<?php echo esc_url($caregiver_story_url) ?>" class="outline-link" data-testid="caregiver-stories">
        Read caregiver stories and insights
      </a>
      <a href="<?php echo esc_url("https://www.alz.org/help-support/resources/helpline")?>" class="outline-link" data-testid="alzheimers-association">
        Alzheimer’s Association Hotline
      </a>
      <a href="<?php echo esc_url("https://soundgenerations.org/wp-content/uploads/sageusa-how-to-prepare-for-lgbt-caregiving-guide-with-aarp.pdf")?>" class="outline-link" data-testid="lbgtq-care">
        View our LGBTQ+ caregiver guide
      </a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('our-programs/caregiver-support/caregiver-self-assessment/')))?>" class="outline-link" data-testid="self-assessment">
        View caregiver self-assessment information
      </a>
    </section>
  </article>
  <h2 class="has-black-color article-header">
    Resources for Veteran Caregivers
  </h2>
  <article id="veteran-caregiver-support" class="veteran-caregiver-resources large-cards">
    <section class="large-card has-purpledrk-background-color">
      <a href="<?php echo esc_url("mailto:reynaldc@soundgenerations.org")?>" class="outline-link has-purpledrk-background-color" data-testid="email-veteran-caregiver-support">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <title>Email</title>
            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" />
        </svg>Veteran Caregiver Support
      </a>
    </section>
      <section class="large-card has-purpledrk-background-color">
        <a href="<?php echo esc_url("tel:+12063855050")?>" class="outline-link" data-testid="call-veteran-caregiver-support">
          <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
              <title>Call</title>
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            </svg>Veteran Caregiver Support
        </a>
      </section>
    <section class="small-cards">
      <a href="<?php echo esc_url("https://www.caregiver.va.gov/")?>" class="outline-link has-purpledrk-background-color" data-testid="va-department-caregiver-support">
        US Department of Veteran Affairs Caregiver Support 
      </a>
      <a href="<?php echo esc_url("tel:+18774243838")?>" class="outline-link has-purpledrk-background-color" data-testid="homeless-veteran-call-center">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
            <title>Call</title>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
        </svg>
        National Call Center for Homeless Veterans
      </a>
      <a href="<?php echo esc_url("tel:+18002738255")?>" class="outline-link has-purpledrk-background-color" data-testid="veteran-crisis-line">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
              <title>Call</title>
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
          </svg>
        Veteran Crisis Line (press 1 after dialing)
      </a>
      <a href="<?php echo esc_url("tel:+18552603274")?>" class="outline-link has-purpledrk-background-color">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone" data-testid="toll-free-va-department-caregiver-support">
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