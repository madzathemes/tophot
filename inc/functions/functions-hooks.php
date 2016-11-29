<?php
function tophot_header_script() {

		wp_enqueue_style('tophot-', get_stylesheet_uri());
		wp_enqueue_script('tophot-effects', get_template_directory_uri() . '/inc/js/effects.js', array('jquery'), '1.0', true);

		$option = get_option("tophot_theme_options");
		if  (!empty($option['menu_top_ad'])) {
			 if  ($option['menu_top_ad']!="ad") {
				 if  (!empty($option['weather_type'])) {
		 			 if  ($option['weather_type']=="f") {
						 wp_enqueue_script('tophot-timeweather', get_template_directory_uri() . '/inc/js/timeweather_f.js', array('jquery'), '1.0', true);
					 } else { wp_enqueue_script('tophot-timeweather', get_template_directory_uri() . '/inc/js/timeweather_c.js', array('jquery'), '1.0', true); }
				 } else { wp_enqueue_script('tophot-timeweather', get_template_directory_uri() . '/inc/js/timeweather_c.js', array('jquery'), '1.0', true); }
			 }
		} else {
			if  (!empty($option['weather_type'])) {
				if  ($option['weather_type']=="f") {
					wp_enqueue_script('tophot-timeweather', get_template_directory_uri() . '/inc/js/timeweather_f.js', array('jquery'), '1.0', true);
				} else { wp_enqueue_script('tophot-timeweather', get_template_directory_uri() . '/inc/js/timeweather_c.js', array('jquery'), '1.0', true); }
			} else { wp_enqueue_script('tophot-timeweather', get_template_directory_uri() . '/inc/js/timeweather_c.js', array('jquery'), '1.0', true); }
		}

		wp_enqueue_script('tophot_html5shiv', get_template_directory_uri() . '/inc/js/html5shiv.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'tophot_html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script('tophot_respondmin', get_template_directory_uri() . '/inc/js/respond.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'tophot_respondmin', 'conditional', 'lt IE 9' );
    function tophot_fonts_url() {

      $theme_font = "Lato:400,900,700";

        /*
        Translators: If there are characters in your language that are not supported
        by chosen font(s), translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Google font: on or off', 'tophot' ) ) {
            $font_url = add_query_arg( 'family', urlencode( ''. esc_attr($theme_font) .'' ), "//fonts.googleapis.com/css" );
        }
        return $font_url;
    }
    wp_enqueue_style( 'tophot-fonts', tophot_fonts_url(), array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'tophot_header_script');

function tophot_admin_script() {
	wp_enqueue_style('tophot-admin', get_template_directory_uri().'/inc/css/admin.css');
}
add_action('admin_enqueue_scripts', 'tophot_admin_script');


function tophot_header_hooks() {

	get_template_part('style');

}

add_action('wp_head', 'tophot_header_hooks');


add_filter('body_class','tophot_class');
function tophot_class($classes) {

	$body_class = "";

	$options = get_option("tophot_theme_options");

	if(!empty( $options['mt_menu_fix'])){
		if( $options['mt_menu_fix']=="1") {
			$body_class .= 'mt-fixed ';
		}  else {
			$body_class .= ' mt-fixed-no ';
		}
	} else {
		$body_class .= ' mt-fixed-no ';
	}

	$style = get_post_meta(get_the_ID(), "magazin_post_style", true);
	if(!empty($style)){
		$body_class .= ' post-style-'.$style;
		if($style=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
		}
	} else if (!empty($options['post_style'])) {
		$body_class .= ' post-style-'.$options['post_style'];
		if($options['post_style']=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
		}
	}

	$layout = get_post_meta(get_the_ID(), "magazin_layout", true);
	if(!empty($layout)){
		$body_class .= ' boxed-layout-on';
	} else if (!empty($options['boxed'])) {
		if ($options['boxed']=="1") {
			$body_class .= ' boxed-layout-on';
		}
	}

	if(!empty($options['menu_random'])) {
		if($options['menu_random']!="1") {
			$body_class .= ' random-off';
		}
	} else {
		$body_class .= ' random-off';
	}

	if(!empty($options['menu_top_ad'])) {
		if($options['menu_top_ad']=="ad") {
			$body_class .= ' menu-ad-on';
		}
	} else {
		$body_class .= ' menu-ad-off';
	}


	$page_space = get_post_meta(get_the_ID(), "magazin_page_padding", true);
	if(!empty($page_space)){
		$body_class .= ' remove-page-padding ';
	}

	$classes[] =  $body_class;
	return $classes;
}

?>
