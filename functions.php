<?php

function pixel44_script_enqueue() {
	
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/44pixel.css', array(), filemtime( get_template_directory() . '/css/44pixel.css' ) ); 
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/44pixel.js' , array('jquery'), filemtime( get_template_directory() . '/js/44pixel.js' ) );
	wp_enqueue_script('jquery');
	
	// Template for getting Google Fonts
	//wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700', false );
	
}

add_action( 'wp_enqueue_scripts', 'pixel44_script_enqueue');


//Remove emoji functionality from default Wordpress
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


// Set up theme functionality for custom menus and other theme functionality
function pixel44_theme_setup() {
	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
}
add_action('init', 'pixel44_theme_setup');

function wpb_custom_new_menu() {
  register_nav_menu('main-menu',__( 'Main menu' ));
  register_nav_menu('footer-menu',__( 'Footer menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


/* ------- ACTIVATE FIND ALLOW DEFER OF SCRIPTS - MAY BE OBSOLETE WITH AUTOPTIMIZE -------

// Paste all script handles in top of body
add_action( 'wp_print_scripts', 'wsds_detect_enqueued_scripts' );
function wsds_detect_enqueued_scripts() {
	global $wp_scripts;
	foreach( $wp_scripts->queue as $handle ) :
		echo $handle . ' | ';
	endforeach;
}

// All script handles:
//contact-form-7 | cookie-notice-front | google-invisible-recaptcha | customjs | 


// Allow enqued scripts to be defered and/or async loaded
add_filter( 'script_loader_tag', 'wsds_defer_scripts', 10, 3 );
function wsds_defer_scripts( $tag, $handle, $src ) {

	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array( 
		'contact-form-7',
	);

    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }
    
    return $tag;
}
*/

/* ------- ACTIVATE TO HAVE CONTACT FORM 7 SUBMISSION TRACKING -------

// Add DOM event to Contact Form 7 for tracking integration
// Push data to datalayer on submit event
add_action( 'wp_footer', 'mycustom_wp_footer' );
function mycustom_wp_footer() {
?>

<script type="text/javascript">
// Add event listener to Contact Form 7 submits and push an event to datalayer
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '230' == event.detail.contactFormId ) { //Check if the submitted form is the Newsletter
        dataLayer.push({'event': 'newsletterFormSubmitted'}); //Add newsletter event if the newsletter form is submitted
    } else { // if it is not the newsletter form that is submitted fire the standard contact form event
		dataLayer.push({'event': 'contactFormSubmitted'});
	}
}, false );
</script>
<?php
}
*/


