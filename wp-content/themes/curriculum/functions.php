<?php

// Registros de estilos

function register_enqueue_style() {
	/* Registrando estilos */
	wp_register_style('animate', get_theme_file_uri('/assets/css/animate.css'), null, '1.0', 'screen');
	wp_register_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.css'), null, '1.0', 'screen');
	wp_register_style('flexslider', get_theme_file_uri('/assets/css/flexslider.css'), null, '1.0', 'screen');
	wp_register_style('icomoon', get_theme_file_uri('/assets/css/icomoon.css'), null, '1.0', 'screen');
	wp_register_style('owlcarouselmin', get_theme_file_uri('/assets/css/owl.carousel.min.css'), null, '1.0', 'screen');
	wp_register_style('owlthemedefaultmin', get_theme_file_uri('/assets/css/owl.theme.default.min.css'), null, '1.0', 'screen');
	wp_register_style('style', get_theme_file_uri('/assets/css/style.css'), null, '1.0', 'screen');
	wp_register_style('themifyicons', get_theme_file_uri('/assets/css/themify-icons.css'), null, '1.0', 'screen');

	wp_enqueue_style('animate');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('flexslider');
	wp_enqueue_style('icomoon');
	wp_enqueue_style('owlcarouselmin');
	wp_enqueue_style('owlthemedefaultmin');
	wp_enqueue_style('style');
	wp_enqueue_style('themifyicons');
}

add_action('wp_enqueue_scripts', 'register_enqueue_style');


//Registros scripts
function register_enqueue_scripts(){
	wp_register_script('modernizr', get_theme_file_uri('/assets/js/modernizr-2.6.2.min.js'), null, null, true);
	wp_register_script('JQuery3', get_theme_file_uri('assets/js/jquery.min.js'), null, null, true);
	wp_register_script('JQueryEasing', get_theme_file_uri('assets/js/jquery.easing.1.3.js'), array(JQuery3), null, true);
	wp_register_script('BootstrapJS', get_theme_file_uri('assets/js/bootstrap.min.js'), array(JQuery3), null, true);
	wp_register_script('JQueryWaypoints', get_theme_file_uri('assets/js/jquery.waypoints.min.js'), array(JQuery3), null, true);
	wp_register_script('owlcarouselJS', get_theme_file_uri('assets/js/owl.carousel.min.js'), array(JQuery3), null, true);
	wp_register_script('mainJS', get_theme_file_uri('assets/js/main.js'), array(JQuery3), null, true);

	wp_enqueue_script('modernizr');
	wp_enqueue_script('JQuery3');
	wp_enqueue_script('JQueryEasing');
	wp_enqueue_script('BootstrapJS');
	wp_enqueue_script('JQueryWaypoints');
	wp_enqueue_script('owlcarouselJS');
	wp_enqueue_script('mainJS');
}

add_action('wp_enqueue_scripts', 'register_enqueue_scripts');

?>