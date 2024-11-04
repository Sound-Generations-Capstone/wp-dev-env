<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sound_Generations
 */

?>
</div>
<!-- #content -->
</div>
<!-- #page -->

<footer id="colophon" class="site-footer widget-area" role="contentinfo">
	<div class="site-info">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<aside class="cred">
			<p>&copy; Copyright 2024 Sound Generations. Sound Generations believes that information about products and services that could benefit aging adults or those caring for them should be made available to consumers to help them make informed decisions about their aging journey. Sound Generations shall not discriminate on the basis of age, gender, marital status, familial status, religion, race, color, creed, sex, national origin, sexual orientation, gender identity, political ideology, the presence of any sensory, mental or physical disability or any other basis prohibited by law. <a href="https://soundgenerations.org/about/terms-of-use/">Terms of Use</a></p>
			<p>*Sponsored ads through any Sound Generations medium including the website does not constitute endorsement, recommendation, or favoring nor does exclusion suggest disapproval. Sound Generations strongly encourages consumers to do their research and review products and services before making any decision that could affect their aging journey.</p>
		</aside>
		<p class="alignright"><a class="button" href="https://soundgenerations.org/#page">Back to Top</a></p>
	</div>
	<!-- .site-info -->
</footer>
<?php wp_footer(); ?>
</body></html>