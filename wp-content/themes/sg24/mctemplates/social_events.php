<div class="social-events-list">
<?php
$currentsiteinfo = get_current_blog_id();
foreach($event_array as $event): ?>
	
	<div class="list-item">

		<div class="leftarea">
			<?php if($event[0]->event_image != null): ?>
				<img src="<?php echo $event[0]->event_image; ?>" />
			<?php else: ?>
				<img src="/wp-content/uploads/sites/<?php echo $currentsiteinfo; ?>/event-placeholder.jpg" />
			<?php endif; ?>
		</div>
		<div class="centerarea">
			<h2>
				<a href="<?php echo get_bloginfo('url'); ?>/events/events-calendar/?mc_id=<?php echo $event[0]->occur_id; ?>">
					<?php echo $event[0]->event_title; ?>
				</a>
			</h2>

			<?php 
$date = new DateTime($event[0]->occur_begin);
$output = $date->format('m/d/Y'); 
?>
<small>
<?php 
echo $output;
?>
</small>
			<p><?php echo $event[0]->event_desc; ?></p>
		</div>
		<div class="rightarea">
			<a class="infobutton" href="<?php echo get_bloginfo('url'); ?>/events/events-calendar/?mc_id=<?php echo $event[0]->occur_id; ?>">
				More Info
			</a>
			<?php if($event[0]->event_link != null): ?>
				<a class="infobutton" href="<?php echo $event[0]->event_link; ?>">Register</a>
			<?php endif; ?>
		</div>

	</div>
	<hr>


<?php endforeach; ?>
<div class="clear"></div>
</div>

<?php // echo " " . var_dump($event_array) . " "; ?>
