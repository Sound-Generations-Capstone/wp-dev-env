<?php

(esc_attr( get_post_meta( $event->event_post, '_mc_event_flyerimg', true ) )) ? $event->event_flyerimg = get_post_meta( $event->event_post, '_mc_event_flyerimg', true ) : '';
(esc_attr( get_post_meta( $event->event_post, '_mc_event_flyerpdf', true ) )) ? $event->event_flyerpdf = get_post_meta( $event->event_post, '_mc_event_flyerpdf', true ) : '';
?>

<div class="single-event">

	<?php $currentsiteinfo = get_current_blog_id(); if($event->event_image != null): ?>
		<img src="<?php echo $event->event_image; ?>" />
	<?php else: ?>
		<img src="/wp-content/uploads/sites/<?php echo $currentsiteinfo; ?>/event-placeholder.jpg" />
	<?php endif; ?>

	<h1><?php echo stripslashes($event->event_title); ?></h1>
	<?php if($event->event_link != null): ?>
    <p><a class="infobutton" href="<?php echo $event->event_link; ?>">Register</a>
	<?php else : ?>
    <p><?php endif; ?>
    <?php if($event->event_flyerpdf): ?>
         <a class="infobutton" href="<?php echo $event->event_flyerpdf; ?>">Flyer</a></p>
    <?php else: ?></p><?php endif; ?>
	<div class="clear"></div>
	<?php 
    if ($event->event_label) {
        $locationstring = $locationstringbeforelink . htmlentities(stripslashes($event->event_label)) . $locationstringafterlink;
        // echo mc_generate_map( $event, $source = 'event' );
        // echo mc_maplink( $event, $request = 'map', $source = 'event' );
        $gmlocationstring = urlencode(stripslashes($event->event_label . ', ' . $event->event_street . ', '  . $event->event_street2 . ', ' . $event->event_city  . ', ' . $event->event_state  . ', ' . $event->event_postcode)); // street, street2, phone, city, state, zip, region, country, url, gps
        $googlemaplocation = '<iframe width="300" height="300" frameborder="0" style="border:0;float:left;margin: 0 2.5em 0 0;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCvCJJXQ1ClCH6W26kYW8v0e8f2SHOzT5k&q=' . $gmlocationstring . '" allowfullscreen></iframe>';
        $eventformattedaddress = $event->event_street;
        ($event->event_street2) ? $eventformattedaddress .= "<br />\n"  . $event->event_street2 : '';
        ($event->event_city) ? $eventformattedaddress .= "<br />\n" . $event->event_city : '';
        ($event->event_state) ? $eventformattedaddress .= ', ' . $event->event_state : '';
        ($event->event_postcode) ? $eventformattedaddress .= ' ' . $event->event_postcode : '';
        ($styledPhone = sgStyledPhoneNumbers($event->event_phone)) ? $eventformattedaddress .= "<br />\n" . $styledPhone : '';
        $eventurlparsed = parse_url($event->event_url);
        ($event->event_url) ? $eventformattedaddress .= "<br />\n<a href=\"" . $event->event_url . "\">" . $eventurlparsed['host'] . "&hellip;</a>" : '';
        $sanitizedlocationtitle = stripslashes($event->event_label);
        $fulllocationblock = <<<EOF
            <div class="site-cta" style="margin: 1em 0 1em 0;background-color: whitesmoke;height:300px;">
            $googlemaplocation
            <section style="padding:2.5em 0 0 0;"><h2>$sanitizedlocationtitle</h2>
            <p style="font-size: 1.8rem;line-height: 1.5;">$eventformattedaddress</p></section>
            </div>
EOF;
        ($event->event_access != '') ? $eventaccessarr = explode(',', $event->event_access):'';
       if (is_array($eventaccessarr)) {
            $lasteventaccessstr = array_pop($eventaccessarr);
            $eventaccessstr = "\n" . 'Accessibility at this event: ' . implode(', ', $eventaccessarr) . $lasteventaccessstr;
        } else {
            $eventaccessstr = '';
        }
        ($event->event_street) ? $locationstring .= ' ' . do_shortcode("[expand title=\"map &amp; info\" id=\"location\" trigclass=\"arrowright\" startwrap=\"\(\<strong\>\" endwrap=\"\<\/strong\>)\" trigclass=\"a\"]" . $fulllocationblock . "[/expand]"): '';
    }
    if ($event->event_flyerimg) {
        if ($event->event_flyerpdf) {
            $eventflyerimgblockbefore = "<a href=\"" . $event->event_flyerpdf . "\">";
            $eventflyerimgblockafter = "</a>";
        }
        $eventflyerimgblock = "<p style=\"width:100%;height:auto;margin:1em auto 1em auto;text-align:center;\">" . $eventflyerimgblockbefore . "<img src=\"$event->event_flyerimg\" style=\"width:80%;height:auto;margin:1em auto 1em auto;\">" . $eventflyerimgblockafter . "</p>";
    }
    $thiseventoccurrences = mc_get_occurrences ($event->event_id);
    if (is_array($thiseventoccurrences) && (count($thiseventoccurrences) > 1)) {
        $thiseventdays = ['Mondays'=>'','Tuesdays'=>'','Wednesdays'=>'','Thursdays'=>'','Fridays'=>'','Saturdays'=>'','Sundays'=>''];
        foreach ($thiseventoccurrences as $myoccurrence){
			$thisoccurrence = mc_get_event( $myoccurrence->occur_id );
            $thisoccurbegin = date_create($thisoccurrence->occur_begin);
            if ($thisoccurbegin >= date_create()) {
                $thisoccurend = date_create($thisoccurrence->occur_end);
                $thisdaykey = date_format($thisoccurbegin,'l').'s';
                $thistimekey = sg20_StyledTimespan ($thisoccurrence->occur_begin, $thisoccurrence->occur_end, $hideend = false, $format="timeonly");
                isset($thiseventdays[$thisdaykey][$thistimekey]) ? $thisdatecomma = ', ' : $thisdatecomma = '';
//
//              Following line creating fatal error with PHP 7.1+
//              $thiseventdays[$thisdaykey][$thistimekey] .= $thisdatecomma . date_format($thisoccurbegin,'n/j');
	            $thiseventdays[$thisdaykey][$thistimekey] = $thiseventdays[$thisdaykey][$thistimekey] . $thisdatecomma . date_format($thisoccurbegin,'n/j');
	            $thisoccurrence;
            }
        }
        // array_merge($daysarray,$thiseventdays);
        $thiseventdates = "<p>&nbsp;</p><h2>Other dates</h2>";
        foreach($thiseventdays as $thisdaykey => $thisdayvalue) {
            if (is_array($thisdayvalue)) {
                $thiseventdates .= '<span style="font-weight:bolder;">' . $thisdaykey . ', ';
                foreach($thisdayvalue as $thistimekey => $thistimevalue) {
                    (strlen($thistimevalue) > 60) ? $thistimevalue = "<br />\n" . $thistimevalue : '';
                    $thiseventdates .= $thistimekey . ':</span> ' . $thistimevalue . "<br />\n";
                }
           }
        }
    }
    // PrettyVarDump($thiseventdays,'Occurrence dates');
   echo wpautop(sg20_StyledTimespan($event->occur_begin, $event->occur_end, $event->event_hide_end, 'long') . "\n" . $locationstring . "\n" . "\n<div style='clear:both;'></div>" . stripslashes($event->event_desc) . "\n" . $eventaccessstr . "\n" . $thiseventdates . "\n" . $eventflyerimgblock, true); ?>
	
	<?php // PrettyVarDump($event,'single event, Event array'); // PrettyVarDump(get_post_meta($event->event_post),'Get Post Meta'); ?>
    

</div>