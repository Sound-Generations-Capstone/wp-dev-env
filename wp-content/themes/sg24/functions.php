<?php
/**
 * Sound Generations functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sound_Generations
 */
if(session_id()=='') session_start();
if ( ! function_exists( 'sg20_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sg20_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Sound Generations, use a find and replace
	 * to change 'sg20' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sg20', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	
	/* Enable JetPack Social Media Icon/Menu 
	* @link https://jetpack.com/support/social-menu/
	*/
	add_theme_support( 'jetpack-social-menu' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'sg20' ),
		'utility' => esc_html__( 'Utility', 'sg20' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
//		'comment-form',
//		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

/* User Role Editor Plugin: 
* Enable Ability for regular Admins to manage other Administrators 
* https://wordpress.org/plugins/user-role-editor/faq/
*/
	define('URE_ENABLE_SIMPLE_ADMIN_FOR_MULTISITE', 1);

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sg20_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
		
	/**
 	* Add custom styles for Classic and Gutenberg editor
	 */
	
	// Add support for Gutenberg editor styles.
	add_theme_support( 'editor-styles' );
	// Enqueue editor styles.
	add_editor_style( 'editor-style.css' );
		
	// Add theme support for Gutenberg wide and full image alignments
	add_theme_support( 'align-wide' );
	
	// Add theme support for Gutenberg responsive embeds
	add_theme_support( 'responsive-embeds' );
	
	/* Block font sizes
	* https://developer.wordpress.org/block-editor/developers/themes/theme-support/
	*/
	add_theme_support( 'editor-font-sizes', array(
    	array(
    	    'name' => __( 'Small', 'sg20' ),
    	    'size' => 16,
   	     'slug' => 'small'
	    ),
 	   array(
  	      'name' => __( 'Normal', 'sg20' ),
   	     'size' => 18,
  	      'slug' => 'normal'
 	   ),
 	   array(
 	       'name' => __( 'Large', 'sg20' ),
 	       'size' => 24,
  	      'slug' => 'large'
 	   ),
 	   array(
  	      'name' => __( 'Huge', 'sg20' ),
  	      'size' => 32,
  	      'slug' => 'huge'
 	   )
	) );	
		
	// Custom color palette for Gutenberg editor
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Purple Dark', 'sg20' ),
			'slug'  => 'purpledrk',
			'color'	=> '#5d0e8b',
		),
		array(
			'name'  => __( 'Purple', 'sg20'),
			'slug'  => 'purple',
			'color' => '#880364',
		),
		array(
			'name'  => __( 'Purple Light', 'sg20' ),
			'slug'  => 'purplelt',
			'color' => '#b00061',
		),
		array(
			'name'  => __( 'Orange Dark', 'sg20'),
			'slug'  => 'orangedrk',
			'color' => '#fa4c06',
		),
		array(
			'name'	=> __( 'Orange', 'sg20'),
			'slug'	=> 'orange',
			'color'	=> '#fd8204',
		),
		array(
			'name'	=> __( 'Orange Light', 'sg20'),
			'slug'	=> 'orangelt',
			'color'	=> '#ff9e19',
		),
		array(
			'name'	=> __( 'Red', 'sg20'),
			'slug'	=> 'red',
			'color'	=> '#d13138',
		),
		array(
			'name'	=> __( 'Black', 'sg20'),
			'slug'	=> 'black',
			'color'	=> '#000000',
		),
		array(
			'name'	=> __( 'White', 'sg20'),
			'slug'	=> 'white',
			'color'	=> '#ffffff',
		)
	) );
}
endif; // sg20_setup
add_action( 'after_setup_theme', 'sg20_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sg20_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sg20_content_width', 704 );
}
add_action( 'after_setup_theme', 'sg20_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sg20_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sg20' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'sg20' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Header', 'sg20' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title hidden">',
		'after_title'   => '</h3>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Calls To Action', 'sg20' ),
		'id'            => 'sidebar-4',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title hidden">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'sg20_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sg20_scripts() {
	wp_enqueue_style( 'sg20-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sg20-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'sg20-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	// wp_enqueue_script( 'sg20-resizer', get_template_directory_uri() . '/js/resizer.js',null,'1.0.0',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sg20_scripts' );

/**
 * Autocalculate and define theme version constant for use in multiple stylesheets/scripts
 */
// define( 'sg20_theme_version', wp_get_theme()->get( 'Version' ) );

/**
 * Enqueue stylesheet
 *
 * Uses the Version header from style.css
 */
//function sg20_theme_enqueue_assets() {
//    wp_enqueue_style( 'stylesheet', str_replace( '.css', '.' . sg20_theme_version . '.css', get_stylesheet_uri() ) );
    // stylesheet URL: https://mydomain.com/wp-content/themes/sg20-theme/style.1.4.css
//}
//add_action( 'wp_enqueue_scripts', 'sg20_theme_enqueue_assets' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Post Format: Link
 */
function get_my_url() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
		return false;
 
	return esc_url_raw( $matches[1] );
}

function sgStyledPhoneNumbers($phone) {
    /* A custom function that takes a US phone number in various formats, then outputs it in Sound Generations text style. 
    @phone - US phone number string.
    This parses the phone number into these parts, into the $phonematches array.
    $phonematches:
      full phone number string: [0]=> "888-254-4637x34545"
      area code: [1]=> "888"
      first 3 numbers: [2]=> string(3) "254"
      last 4 numbers [3]=> string(4) "4637"
      extension string: [4]=> string(6) "x34545"
      parsed extension numbers: [5]=> string(5) "34545"
    
    If the string isn't a valid US phone number, the pattern isn't matched, and the function returns false.
    */
    $phoneRegex = '/1?\s*\W?\s*([2-9][0-8][0-9])\s*\W?\s*([2-9][0-9]{2})\s*\W?\s*([0-9]{4})(\s?e?x?t?\.?(\d*))?/i';
    if (preg_match($phoneRegex, $phone, $phonematches)) {
        $sgStyledPhone = '(' . $phonematches[1] . ')' . ' ' . $phonematches[2] . '-' . $phonematches[3];
        ($phonematches[5]) ? $sgStyledPhone .= ' x' . $phonematches[5] : '';
        return $sgStyledPhone;
    } else {
        return false;
    }
}

function sgParseHost($Address) { 
    /* Bug or feature in PHP parse_url causes it to return the host in the path array if http: isn't entered.
    */
    $parseUrl = parse_url(trim($Address)); 
    return trim($parseUrl[host] ? $parseUrl[host] : array_shift(explode('/', $parseUrl[path], 2))); 
}

function PrettyVarDump($sgobj, $sgobjname = 'Array', $sgtestonly = true, $sgdomaintest = 'domain', $sguritest = '', $echoinphp = false) {
    /* Custom Sound Generations function that dumps a complicated array or object surrounded by <pre> tags so output is easier to read in a browser. The function defaults to only dump variables on a test server. The default test server is test.soundgenerations.org, but domains or individual pages can be passed to it as well. Test page/server only printing can be overridded by sending $sgtestonly parameter as false, in which case the array dump will happen on any page load.
    Since Sound Generations doesn't have a true standalone testing or development site, this function is very important to writing new code or debugging.
    @sgobj : array or object
        The array or object you want to print in a readable way to the browser. The only required parameter.
    @sgobjname : string
        Name you'd like to print before the array / object output. This is helpful when you're outputting more than one array on a page, you can name it and tell more easily which is which. Default to just "Array".
        Note that a colon and line break are printed after the name.
    @sgtestonly : true or false
        Default is true
        Tells if the vardump should only happen on a test server or test page. This defaults to true. The only place this will print by default is on the domain test.soundgenerations.org.
    @sgdomaintest : 'domain' or 'path'
        Default is 'domain'
        When you provide a URI as a valid test page, test it against an entire domain ('test.soundgenerations.org') or a single path ('soundgenerations.org/test/testpage'). 
    @sguritest : valid path string or an array of valid path strings
        Include custom paths as the test pages where the vardump are allowed to print.
        If @sgdomaintest is set to 'path', the full domain and proceeding http: or https: must be included. The path must be exact, including trailing slashes / etc. Copy directly from browser address bar for best results.
    @echoinphp : true or false
        defaults to false.
        If set to true, output will be as a php array / object construction which can be copied and pasted directly into code for testing purposes.
    */
    if ($sgtestonly == true) {
        if ($sguritest == '') {
            $testsiteurls[] = 'test.soundgenerations.org';
        } elseif (is_array($sguritest)) {
            $testsiteurls = $sguritest;
        } else {
            $testsiteurls[] = $sguritest;
        }
        foreach ($testsiteurls as $testsiteval) {
                $allvaliduris = true;
                $isitatestpage = false;
                if ($sgdomaintest == 'domain') {
                    $parseduritest = parse_url($testsiteval);
                    // if (strpos( $_SERVER['HTTP_HOST'], sgParseHost($parseduritest['host'])) !== false) {
                    if ($_SERVER['HTTP_HOST'] == sgParseHost($testsiteval)) {
                        $isitatestpage = true;
                        break;
                    }
                } elseif ($sgdomaintest == 'path') {
                    $parseduritest = parse_url($testsiteval);
                    if (($_SERVER['REQUEST_URI'] == $parseduritest['path']) && ($_SERVER['HTTP_HOST'] == sgParseHost($testsiteval))) {
                        $isitatestpage = true;
                        break;
                    }
                } else {
                    $allvaliduris = false;
                    break;
                }
        }
        if (($allvaliduris == true) && ($isitatestpage == true)) {
            if ($echoinphp == false) {
                echo "<p>$sgobjname:</p><pre>"; var_dump($sgobj); echo '</pre>';
            } elseif ($echoinphp == true) {
                $sgobj = var_export($sgobj, true);
                $sgobj = str_replace("stdClass::__set_state", "(object)", $sgobj);
                echo "<p>$sgobjname:</p><pre>\n\n" . '$data = ' . $sgobj . ";\n\n</pre>";
            }
        }
    } elseif ($sgtestonly == false) {
        if ($echoinphp == false) {
            echo "<p>$sgobjname:</p><pre>"; var_dump($sgobj); echo '</pre>';
        } elseif ($echoinphp == true) {
            $sgobj = var_export($sgobj, true);
            $sgobj = str_replace("stdClass::__set_state", "(object)", $sgobj);
            echo "<p>$sgobjname:</p><pre>\n\n" . '$data = ' . $sgobj . ";\n\n</pre>";
        }
    }
}

function sg20_StyledTimespan ($starttime, $endtime, $hideend = false, $format="long") {
    /* A custom Sound Generations function that takes a startime and endtime in various formats and returns a friendly human readable format in Sound Generations style. It assumes time and date included in the start and end strings, such as a timestamp.
    @starttime = Span start time, date and time format. If no time is given, defaults to current date and time.
    @endtime = Span end time, date and time format.
    @hideend = If true, the end date/time is hidden in the return. Defaults to true, showing the end date/time.
    @format =   long - full date/time span string, full month names and punctuation.
                short - Date shortened to m/d/yyyy. 
                listshort - For event listings, same as short but doesn't show end time.
    */
	($starttime = date_create('@' . strtotime($starttime))) ? '' : $starttime = date_create();
    ($endtime = date_create('@' . strtotime($endtime))) ? '' : $endtime = new DateTime($starttime->format('Y-m-d'));
	if ($format == "long") {
		$dateformatstring = "l, F j, Y";
        (date_format($starttime, 'i') == '00') ? $starttimeformatstring = "g":$starttimeformatstring = "g:i";(date_format($endtime, 'i') == '00') ? $endtimeformatstring = "g":$endtimeformatstring = "g:i";
	} elseif ($format == "short") {
		$dateformatstring = "n/j/Y";
        ($starttime->format('i') == '00') ? $starttimeformatstring = "g":$starttimeformatstring = "g:i";
		(date_format($endtime, 'i') == '00') ? $endtimeformatstring = "g":$endtimeformatstring = "g:i";
	} elseif ($format == 'listshort') {
        $dateformatstring = "n/j/Y";
        (date_format($starttime, 'i') == '00') ? $starttimeformatstring = "g":$starttimeformatstring = "g:i";
        $hideend = true;
    } elseif ($format == "timeonly") {
		$dateformatstring = "";
        ($starttime->format('i') == '00') ? $starttimeformatstring = "g":$starttimeformatstring = "g:i";
		($endtime->format('i') == '00') ? $endtimeformatstring = "g":$endtimeformatstring = "g:i";
    }
	
	if ($starttime->format('Y-m-d') == date_format($endtime, 'Y-m-d')) {
        if ($starttime->format('H:i') == '00:00' && date_format($endtime, 'H:i') == '23:59') {
            $eventtimeoutput = date_format($starttime, $dateformatstring);
        } else {
            if ($starttime->format('a') == date_format($endtime, 'a') && ($hideend != true)) {
                $starttimeampm = '';
            } else {
                $starttimeampm = ' ' . date_format($starttime, 'a');
            }
            $eventtimeoutput = $starttime->format($dateformatstring) . ', ' . date_format($starttime, $starttimeformatstring) . $starttimeampm;
            if (($endtime != '') && ($hideend == false)) {
                $eventtimeoutput .= ' &ndash; ' . date_format($endtime, $endtimeformatstring . ' a');
            }
        }
	} else {
		if ($starttime->format('H:i') == '00:00' && date_format($endtime, 'H:i') == '23:59') {
            $eventtimeoutput = $starttime->format($dateformatstring) . ' &ndash; ' . date_format($endtime, $dateformatstring);
        } else {
            $starttimeampm = ' ' . $starttime->format('a');
            $eventtimeoutput = $starttime->format($dateformatstring) . ', ' . $starttime->format($starttimeformatstring) . $starttimeampm;
            if (($endtime != '') && ($hideend == false)) {
                $eventtimeoutput .= ' &ndash; ' . date_format($endtime, $dateformatstring . ', ' . $endtimeformatstring . ' a');
            }
        }
	}
    if ($format == "timeonly") {
        $eventtimeoutput = mb_substr($eventtimeoutput, 2);
    }
    unset($starttime);
    unset($endtime);
	return $eventtimeoutput;
}

/*
Hook into calendar plugin to replace view with our template
*/

add_filter ('mc_before_calendar',  'ivycat_set_calendar_filters',10,2);
add_filter('mc_after_calendar', 'ivycat_get_data', 10, 2);	

function ivycat_set_calendar_filters($meh,$args){
	
	if ($args['format'] == 'specialevents' || $args['format']=='socialevents' || $args['format']=='classevents' || isset($_GET['mc_id']) || isset($_GET['mc_oid'])){
		add_filter('mc_display_format', 'ivycat_change_calendar_format', 20, 1 );
		add_filter( 'mc_from_date', 'ivycat_set_from', 10, 1 );
		add_filter( 'mc_to_date', 'ivycat_set_to', 10, 1 );

	}
	return $meh;
}
   
// have to get by the filter in the plugin
function ivycat_change_calendar_format($format){
	return 'list';
}

function ivycat_get_data($meh,$args){

	if ($args['format'] == 'specialevents' || $args['format']=='socialevents' || $args['format']=='classevents'){
        $sgdate = new DateTime();
        $sgtoday = $sgdate->format('Y-m-d');
        $sgdate->add(new DateInterval('P183D'));
        $sgoneyear = $sgdate->format('Y-m-d');
        $_SESSION['from'] = $sgtoday;
        $_SESSION['to'] = $sgoneyear;
		$category = $args['category']==''?'all':$args['category'];
		$from = empty($_SESSION['from'])?date("Y-m-d", strtotime("first day of this month")):$_SESSION['from'];
		$to = empty($_SESSION['to'])?date("Y-m-d", strtotime("last day of this month")):$_SESSION['to'];
		$args['from'] = $from;
		$args['to'] = $to;
		$event_array = my_calendar_events( $args );
		$_SESSION['event_array'] = $event_array;
        // PrettyVarDump($event_array,'ivycat_get_data Event Array');
		if ($args['format'] == 'specialevents')
			add_filter('my_calendar_body', 'ivycat_change_calendar_view');
		elseif ($args['format'] == 'socialevents')
			add_filter('my_calendar_body', 'ivycat_change_calendar_view_social');
        elseif ($args['format'] == 'classevents')
			add_filter('my_calendar_body', 'ivycat_change_calendar_view_classes');
	}
	elseif (isset($_GET['mc_id']) && is_numeric( $_GET['mc_id'] )){

		$mc_id = (int) $_GET['mc_id'] ;
        $_SESSION['mc_event']  = mc_get_event( $mc_id );
		add_filter('my_calendar_body', 'ivycat_change_calendar_view');
		
	}
    elseif (isset($_GET['mc_oid']) && is_numeric( $_GET['mc_oid'] )){

		$mc_id = (int) $_GET['mc_oid'] ;
		$_SESSION['mc_event']  = mc_get_event_core( $mc_id );
		add_filter('my_calendar_body', 'ivycat_change_calendar_view');
		
	}
	else ivycat_remove_filters();
				
	return $meh;
}

function ivycat_set_from($from){
   $_SESSION['from'] = $from;
   return $from;
}

function ivycat_set_to($to){
   $_SESSION['to'] = $to;
   return $to;
}

function sgGetCategories() {
    /* Custom Sound Generations function that gets an array of all Event Calendar categories. */
    global $wpdb;
	$url  = plugin_dir_url( __FILE__ );
	$mcdb = $wpdb;
	if ( get_option( 'mc_remote' ) == 'true' && function_exists( 'mc_remote_db' ) ) {
		$mcdb = mc_remote_db();
	}
	$key        = '';
	// $cat_limit  = mc_select_category( $category, 'all', 'category' );
	$sql        = "SELECT * FROM " . my_calendar_categories_table() . " $cat_limit ORDER BY category_name ASC";
	$categories = $mcdb->get_results( $sql );
    return $categories;
}

function sgFlattenEventArray($eventarr, $cutoffindays=91) {
    /* Objects / Arrays provided by My Calendar are multi-tiered. The top level of this object / array is a date, then all events on that date are grouped inside it. This is overly complex for most uses, and can result in more recursions than needed if the object was flattened. 
    This takes an event array from My Calendar and puts each event object at the top level of the array. (It removes the top date level.)
    Additionally, @cutoffindays can be set to limit all occurrences in the returned array to be within a certain number of days.
    It defaults to 91 days, meaning the events returned will only be 3 months or less in the future. Events / occurrences beyond 3 months are dropped. 
    @eventarr = a standard $event array provided by the My Calendar plugin.
    @cutoffindays = optional parameter, defaulting to number days after which events will not be included.
                    may also specify "none" to return all events with no cuttoff.
    */
    $currdate = new DateTime();
    foreach ($eventarr as $event) {
        foreach ($event as $realeventdata) {
            if ($cutoffindays != 'none') {
                $occurdate = new DateTime($realeventdata->occur_begin);
                $dateinterval = date_diff($currdate, $occurdate);
                (($dateinterval->format('%a') < $cutoffindays) && ($dateinterval->format('%a') > -1)) ? $neweventarr[] = $realeventdata : '';
                unset($occurdate,$dateinterval); 
            } else {
                $neweventarr[] = $realeventdata;
            }
        }
    }
    unset($currdate);
    // PrettyVarDump($neweventarr,'sgFlattenEventArray Output');
    return $neweventarr;
}

function array_column_portable($array, $key) {
    return array_map(function($e) {
    return is_object($e) ? $e->$key : $e[$key];
    }, $array);
}

function sgSortArray($array, $sortkey, $sortorder=SORT_DESC) {
    array_multisort(array_column_portable($array, $sortkey), $sortorder, $array);
    return $array;
}

function ivycat_change_calendar_view($content){

	ivycat_remove_filters();
	if (!empty($_SESSION['event_array']) ){
		// $parts = ivycat_split_content($content);
		$event_array = $_SESSION['event_array'];
		unset($_SESSION['event_array']);
		ob_start();
		include(get_stylesheet_directory().'/mctemplates/special_eventsv2.php');
	if (is_array($parts))
		return $parts[0].ob_get_clean().$parts[1]; 
		return ob_get_clean();
	}
	else if (!empty($_SESSION['mc_event'])){
		$event = $_SESSION['mc_event'];
		unset($_SESSION['mc_event']);
		ob_start();
		include(get_stylesheet_directory().'/mctemplates/single_eventv2.php');
		return ob_get_clean(); 
	}

	return $content;
		
}
function ivycat_change_calendar_view_social($content){
	ivycat_remove_filters();
	if (!empty($_SESSION['event_array']) ){
		$parts = ivycat_split_content($content);
		$event_array = $_SESSION['event_array'];
		unset($_SESSION['event_array']);
		ob_start();
		include(get_stylesheet_directory().'/mctemplates/social_events.php');
		if (is_array($parts))
		return $parts[0].ob_get_clean().$parts[1]; 
		return ob_get_clean();
	}

	return $content;
	
}
function ivycat_change_calendar_view_classes($content){
	ivycat_remove_filters();
	if (!empty($_SESSION['event_array']) ){
		// $parts = ivycat_split_content($content);
		$event_array = $_SESSION['event_array'];
		unset($_SESSION['event_array']);
		ob_start();
		include(get_stylesheet_directory().'/mctemplates/class_events.php');
		if (is_array($parts))
         //   PrettyVarDump($parts[0],'ivycat_change_calendar_view_classes $parts[0]');
         //   PrettyVarDump($parts[1],'ivycat_change_calendar_view_classes $parts[1]');
		return $parts[0].ob_get_clean().$parts[1]; 
		return ob_get_clean();
	}

	return $content;
	
}
function ivycat_split_content($content){
    list($start,$remaining) = explode('<ul',$content, 2);
	if (empty($remaining)) return $content;
	list($meh, $end) = explode('</ul>',$remaining, 2);
	if (empty($end)) return $content;
    // PrettyVarDump($start,'ivycat_split_content $start');
    // PrettyVarDump($end,'ivycat_split_content $end');
	return [$start,$end];
}
function ivycat_remove_filters(){
   remove_filter( 'my_calendar_body', 'ivycat_change_calendar_view' );
   remove_filter( 'my_calendar_body', 'ivycat_change_calendar_view_social' );
    remove_filter( 'my_calendar_body', 'ivycat_change_calendar_view_classes' );
   remove_filter( 'mc_display_format', 'ivycat_change_calendar_format', 20, 1 );
   remove_filter( 'mc_from_date', 'ivycat_set_from', 10, 1 );
   remove_filter( 'mc_to_date', 'ivycat_set_to', 10, 1 );
}

function create_sitemap() {
	$page = get_page_by_path('/sitemap');
	if (!$page) { // sitemap doesn't exist
		$page_args = [
			'post_title' => 'Sitemap',
			'post_status' => 'publish',
			'post_type' => 'page',
			'page_template' => 'page-sitemap.php'
		];
		wp_insert_post($page_args);
	} else {
		// sitemap found, updating
		update_post_meta($page->ID, '_wp_page_template', 'page-sitemap.php');
	}
}
add_action('init', 'create_sitemap');

function set_media_center_template() {
	$page = get_page_by_path('/media-center');
	update_post_meta($page->ID, '_wp_page_template', 'page-news-center.php');
}
add_action('init', 'set_media_center_template');