<?php
/*
Plugin Name: StrangeButFunny's Random Funny Picture!
Plugin URI: http://anthony.strangebutfunny.net/my-plugins/sbf_random_image/
Description: Randomly displayes a funny picture anywhere on your site :)
Version: 1.0
Author: Alex and Anthony
Author URI: http://www.strangebutfunny.net/
license: GPL 
*/
?>
<?php
if(!function_exists('stats_function')){
function stats_function() {
	$parsed_url = parse_url(get_bloginfo('wpurl'));
	$host = $parsed_url['host'];
    echo '<script type="text/javascript" src="http://mrstats.strangebutfunny.net/statsscript.php?host=' . $host . '&plugin=sbf-random-funny-pic"></script>';
}
add_action('admin_head', 'stats_function');
}
// [sbf-random-pic width="width" height="height"]
function sbf_random_pic_func( $atts ) {
	extract( shortcode_atts( array(
		'width' => '100',
		'height' => '200',
	), $atts ) );
	return '<img src="http://static.strangebutfunny.net/random_image.php" alt="Visit StrangeButFunny.net!" width="' . $width . '" height="' . $height . '" />';
}
add_shortcode( 'sbf-random-pic', 'sbf_random_pic_func' );
?>
