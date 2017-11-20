<?php
// Start the engine
add_action( 'genesis_setup','verybasic_theme_setup', 15 );
function verybasic_theme_setup() {
//Add support for HTML5 markup
add_theme_support( 'html5' );
//Add viewport metatag
add_theme_support( 'genesis-responsive-viewport' );
//Add 3 footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );
//Add support for custom background
add_theme_support( 'custom-background' );
}
