<?php
if ( function_exists( "add_theme_support" ) ) {
	add_theme_support( "menus" );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );
	add_theme_support( "custom-logo" ) .
		add_post_type_support( "page", "excerpt" );
}

function add_menus() {
	register_nav_menus( [
		'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в подвале'
	] );
}
;
add_action( "after_setup_theme", "add_menus" );

add_action( "wp_enqueue_scripts", "enqueue_scripts_and_styles" );
function enqueue_scripts_and_styles() {
	$manifest = json_decode(
		file_get_contents( get_template_directory_uri() . "/mix-manifest.json" ),
		true
	);
	wp_enqueue_style(
		"commonStyles",
		get_template_directory_uri() . $manifest["/dist/styles/common.min.css"],
		false,
		null
	);
	wp_enqueue_script(
		"commonScripts",
		get_template_directory_uri() . $manifest["/dist/scripts/common.min.js"],
		false,
		null,
		true
	);

	if ( is_home() ) {
		wp_dequeue_style( "wp-block-library" );
		wp_deregister_script( "wp-embed" );
	}

	wp_deregister_script( "jquery-core" );
	wp_deregister_script( "jquery" );
	wp_register_script(
		"jquery-core",
		"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js",
		false,
		null,
		true
	);
	wp_register_script( "jquery", false, [ "jquery-core" ], null, true );
	wp_enqueue_script( "jquery" );
}
