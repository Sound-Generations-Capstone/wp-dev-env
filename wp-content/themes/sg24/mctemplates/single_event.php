<?php if (strpos( $_SERVER['HTTP_HOST'], 'test.soundgenerations.org') !== false): ?>

<div class="single-event">

	<?php if($event->event_image != null): ?>
		<img src="<?php echo $event->event_image; ?>" />
	<?php else: ?>
		<img src="//westseattle.soundgenerations.org/wp-content/uploads/sites/6/2016/07/header-home-west-seattle-seniors.jpg" />
	<?php endif; ?>

	<h1><?php echo $event->event_title; ?> hello</h1>
	<?php if($event->event_link != null): ?>
		<a class="infobutton" href="<?php echo $event->event_link; ?>">Register</a>
	<?php endif; ?>
	<div class="clear"></div>

	<?php if($event->event_begin != null): ?>
	<?php 
		$date = DateTime::createFromFormat('Y-m-d', $event->event_begin);
		$output = $date->format('m/d/Y');
	?>
	<small>Event date: <?php echo $output; ?></small>
	<?php endif; ?>
	
	<p><?php echo $event->event_desc; ?></p>
    
    <?php 
    $rawEvent = mc_get_event( $event->occur_id, 'object' );
    echo "Event: " . $event->occur_id . "<br /><br /><pre>"; var_dump($event);  echo "</pre>";
    echo "Raw Event: " . $event->occur_id . "<br /><br /><pre>"; var_dump($rawEvent); echo "</pre>"; ?>

</div>

<?php else: ?>

<div class="single-event">

	<?php if($event->event_image != null): ?>
		<img src="<?php echo $event->event_image; ?>" />
	<?php else: ?>
		<img src="//westseattle.soundgenerations.org/wp-content/uploads/sites/6/2016/07/header-home-west-seattle-seniors.jpg" />
	<?php endif; ?>

	<h1><?php echo $event->event_title; ?></h1>
	<?php if($event->event_link != null): ?>
		<a class="infobutton" href="<?php echo $event->event_link; ?>">Register</a>
	<?php endif; ?>
	<div class="clear"></div>

	<?php if($event->event_begin != null): ?>
	<?php 
		$date = new DateTime($event[0]->occur_begin);
		$output = $date->format('m/d/Y');
	?>
	<small>Event date: <?php echo $output; ?></small>
	<?php endif; ?>
	
	<p><?php echo $event->event_desc; ?></p>

</div>

<?php endif;