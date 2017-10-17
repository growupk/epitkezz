<?php
function evistaStarterScripts () {
	if (!is_admin()) {
    wp_deregister_script('app-bundle');
		wp_register_script('app-bundle', get_template_directory_uri().'/build/bundle.js', false, '1.0.0', true);
		wp_enqueue_script('app-bundle');

		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', '//code.jquery.com/jquery-2.2.4.min.js', false, '2.2.4', true);
		wp_enqueue_script('jquery');

    wp_deregister_script('bootstrap');
		wp_register_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', false, '3.3.7', true);
		wp_enqueue_script('bootstrap');
	}
}
add_action('init', 'evistaStarterScripts');

function evistaStarterStyles () {
  if(!is_admin()){

		wp_register_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
		wp_enqueue_style( 'bootstrap' );

		wp_register_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'font-awesome' );

		wp_register_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:100,100i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext' );
		wp_enqueue_style( 'wpb-google-fonts' );
    
		if (file_exists( get_stylesheet_directory() . '/build/app.css' )){
			wp_register_style( 'app', get_template_directory_uri() . '/build/app.css' );
  		wp_enqueue_style( 'app' );
		}

  }
}
add_action('init', 'evistaStarterStyles');

function addDeferAttributeToScripts ($tag, $handle) {
	$scriptsToDefer = array(
		'app-bundle',
		'wp-embed'
	);

	foreach($scriptsToDefer as $script) {
		if($script === $handle) {
			return str_replace(' src', ' defer src', $tag);
		}
	}

	return $tag;
}
add_filter('script_loader_tag', 'addDeferAttributeToScripts', 10, 2);

function _removeScriptVersion( $src ){
  $parts = explode( '?ver', $src );
  $parts = explode( '?v', $parts[0]);
  return $parts[0];
}
add_filter( 'script_loader_src', '_removeScriptVersion', 15, 1 );
add_filter( 'style_loader_src', '_removeScriptVersion', 15, 1 );