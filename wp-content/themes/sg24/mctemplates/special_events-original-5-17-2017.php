<div class="event-category-grid">

<?php
//$event_array = $_SESSION['mc_event_array'];

foreach($event_array as $event): ?>


	
		<div class="grid-item">
			<div class="image-area">
				<?php if($event[0]->event_image != null): ?>
					<img src="<?php echo $event[0]->event_image; ?>" />
				<?php else: ?>
					<img src="//westseattle.soundgenerations.org/wp-content/uploads/sites/6/2016/07/header-home-west-seattle-seniors.jpg" />
				<?php endif; ?>
			</div>

			<div class="darkarea">
		<?php $date = new DateTime($event[0]->occur_begin);
		$output = $date->format('m/d/Y'); 
				 ?>
				<small>
<?php 
echo $output;
?>
</small>
				<div class="eventtitle">
					<h2>
						<a href="<?php echo get_bloginfo('url'); ?>/events/events-calendar/?mc_id=<?php echo $event[0]->event_id; ?>">
						<?php echo $event[0]->event_title; ?>
						
						</a>
					</h2>
				</div>
				<a class="findoutmore" href="<?php echo get_bloginfo('url'); ?>/events/events-calendar/?mc_id=<?php echo $event[0]->event_id; ?>">Find out more</a>
				<?php if($event[0]->event_link != null): ?>
				<a class="infobutton" href="<?php echo $event[0]->event_link; ?>">Register</a>
				<?php endif; ?>
			</div>
		 	<?php  //echo $event[0]->occur_begin . " " . $event[0]->event_title . "<br />"; 
			//echo "<pre>" . var_dump($event) . "</pre>"; ?>
		</div>


<?php endforeach; ?>

</div>
<?php if (strpos( $_SERVER['HTTP_HOST'], 'test.soundgenerations.org') !== false): ?>
<?php echo "<pre>" . var_dump($event_array) . "</pre>"; ?>
<?php endif; ?>
