<?php // if (strpos( $_SERVER['HTTP_HOST'], 'test.soundgenerations.org') !== false): ?>

<div class="event-category-grid">
    
<?php $currentsiteinfo = get_current_blog_id(); foreach($event_array as $eventstoday): ?>
    <?php foreach($eventstoday as $event): ?>


	
		<div class="grid-item">
			<div class="image-area">
				<?php if($event->event_image != null): ?>
					<img src="<?php echo $event->event_image; ?>" />
				<?php else: ?>
					<img src="/wp-content/uploads/sites/<?php echo $currentsiteinfo ?>/event-placeholder.jpg" />
				<?php endif; ?>
			</div>

			<div class="darkarea">
		<?php $output = sg20_StyledTimespan($event->occur_begin, $event->occur_end, $event->event_hide_end, 'listshort'); ?>
				<small>
<?php 
echo $output;
?>
</small>
				<div class="eventtitle">
					<h2>
						<a href="<?php echo get_bloginfo('url'); ?>/events/events-calendar/?mc_oid=<?php echo $event->event_id; ?>">
						<?php echo htmlentities(stripslashes($event->event_title)); ?>
						
						</a>
					</h2>
				</div>
				<a class="findoutmore" href="<?php echo get_bloginfo('url'); ?>/events/events-calendar/?mc_oid=<?php echo $event->event_id; ?>">Find out more</a>
				<?php if($event->event_link != null): ?>
				<a class="infobutton" href="<?php echo $event->event_link; ?>">Register</a>
				<?php endif; ?>
			</div>
		 	<?php  //echo $event->occur_begin . " " . $event->event_title . "<br />"; 
			//echo "<pre>" . var_dump($event) . "</pre>"; ?>
		</div>


<?php endforeach; endforeach; ?>

</div>
<?php 
/* echo "From date: " . $_SESSION['from'] . "<br />";
echo "To date: " . $_SESSION['to'] . "<br />";
$sgdate = new DateTime();
$sgtoday = $sgdate->format('Y-m-d');
$sgdate->add(new DateInterval('P365D'));
$sgoneyear = $sgdate->format('Y-m-d') . "\n";
echo "Today \"Y-m-d\": " . $sgtoday . "<br />";
echo "1 Year from Now: " . $sgoneyear . "<br />";
echo "<pre>" . var_dump($event_array) . "</pre>";  */
?>

