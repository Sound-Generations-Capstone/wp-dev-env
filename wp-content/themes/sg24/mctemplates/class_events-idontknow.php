
<?php

$event_array = sgFlattenEventArray($event_array);
$testpages[] = 'https://sessc.org/activities/classes-for-testing/';
$testpages[] = 'https://shorelinelfpseniorcenter.org/activities/classes-new/';
PrettyVarDump($event_array, 'Class Events main event array', true, 'path', $testpages, true);
array_multisort (array_column($event_array, 'category_name'), SORT_ASC, array_column($event_array, 'event_id'), SORT_ASC, array_column($event_array, 'occur_begin'), SORT_ASC, $event_array);

$catcount = 0;
$printedevent = 0;
?>
<style>
    /* .heading.my-calendar-month {
        display:none;
        visibility: hidden;
    }
    .mc-events {
        display:none;
        visibility: hidden;
    } */
        .mc-main ul li {
            margin-left:1.2em;
        }
</style>

<?php

foreach($event_array as $event) { 
    /* if ($event->category_name != $lastCategory) {
        echo $catcount != 0 ? "<div class=\"clear\"></div>\n<hr>" : '';
        echo '<h2 style="font-size:1.5em;margin-bottom:.4em;">' . $event->category_name . "</h2>\n";
        // echo '<div class="social-events-list">';
    } */
    if ($event->event_id == $lasteventid) {
        $thisoccurbegin = date_create($event->occur_begin);
        $thisoccurend = date_create($event->occur_end);
        $thisdaykey = date_format($thisoccurbegin,'l').'s';
        $thistimekey = sg20_StyledTimespan ($event->occur_begin, $event->occur_end, $hideend = false, $format="timeonly");
        isset($thiseventdays[$thisdaykey][$thistimekey]) ? $thisdatecomma = ', ' : $thisdatecomma = '';
        $thiseventdays[$thisdaykey][$thistimekey] .= $thisdatecomma . date_format($thisoccurbegin,'n/j');
    } else {
        
        if ($catcount == 0) {
            $thisevent = $event;
            /* $thisoccurbegin = date_create($event->occur_begin);
            $thisoccurend = date_create($event->occur_end);
            $thisdaykey = date_format($thisoccurbegin,'l').'s';
            $thistimekey = sg20_StyledTimespan ($event->occur_begin, $event->occur_end, $hideend = false, $format="timeonly");
            isset($thiseventdays[$thisdaykey][$thistimekey]) ? $thisdatecomma = ', ' : $thisdatecomma = '';
            $thiseventdays[$thisdaykey][$thistimekey] .= $thisdatecomma . date_format($thisoccurbegin,'n/j'); */
        }
        if ($catcount != 0) {
    ?>
	
    <?php $printedevent++; ?>
	<div style="font-size: 1.8rem;line-height: 1.5">

			<?php if($thisevent->event_image != null): ?>
				<img src="<?php echo $thisevent->event_image; ?>" style="float:right;width:200px;" />
			<?php else: ?>
				<!-- <img src="//westseattle.soundgenerations.org/wp-content/uploads/sites/6/2016/07/header-home-west-seattle-seniors.jpg" style="float:right;width:200px;" /> -->
			<?php endif; ?>
			<h3><a href="<?php echo get_bloginfo('url'); ?>/events/events-calendar/?mc_id=<?php echo $thisevent->event_id; ?>" style="text-decoration:none;font-size:1.2em;text-transform:none;"><?php echo stripslashes($thisevent->event_title); ?></a></h3>
        <?php 
        foreach($thiseventdays as $thisdaykey => $thisdayvalue) {
            $thiseventdates .= '<span style="font-weight:bolder;">' . $thisdaykey . ', ';
            foreach($thisdayvalue as $thistimekey => $thistimevalue) {
                (strlen($thistimevalue) > 60) ? $thistimevalue = "<br />\n" . $thistimevalue : '';
                $thiseventdates .= $thistimekey . ':</span> ' . $thistimevalue . "<br />\n";
            }
        }
        echo $thiseventdates;
        unset($thiseventdays);
        unset($thiseventdates);
        if ($thisevent->event_label) {
            echo  '<span style="font-weight:bold;">Location: </span>' . stripslashes($thisevent->event_label);
            echo $thisevent->event_street ? ', ' . $thisevent->event_street . "<br />\n" : "<br />\n";
        }
?>
            <?php if($thisevent->event_link != null): ?>
<a class="infobutton" href="<?php echo $thisevent->event_link; ?>">Register</a><br />
			<?php endif; ?>
			<p style='font-family: "Avenir LT W01_45 Book1475508", sans-serif;font-size: 1.8rem;line-height: 1.5'><?php echo wpautop(stripslashes($thisevent->event_desc)); ?></p><p>&nbsp;</p>
	</div>

<?php 
         }
        if ($event->category_name != $lastCategory) {
            echo $catcount != 0 ? "<div class=\"clear\"></div>\n<hr>" : '';
            echo '<h2 style="font-size:1.5em;margin-bottom:.4em;">' . $event->category_name . "</h2>\n";
            // echo '<div class="social-events-list">';
        }
        $thisevent = $event;
        $thisoccurbegin = date_create($event->occur_begin);
        $thisoccurend = date_create($event->occur_end);
        $thisdaykey = date_format($thisoccurbegin,'l').'s';
        $thistimekey = sg20_StyledTimespan ($event->occur_begin, $event->occur_end, $hideend = false, $format="timeonly");
        isset($thiseventdays[$thisdaykey][$thistimekey]) ? $thisdatecomma = ', ' : $thisdatecomma = '';
        $thiseventdays[$thisdaykey][$thistimekey] .= $thisdatecomma . date_format($thisoccurbegin,'n/j');

    }
    $lasteventid = $event->event_id;
    $lastCategory = $event->category_name;
    unset($thisoccurbegin);
    unset($thisoccurend);
    $catcount++;
} 
if ($printedevent == 0) {
        echo '<h2>There are currently no events for this page.</h2><br />Check the <a href="/events/events-calendar/">full calendar</a> for other events that might be of interest to you.';
    }
?>


