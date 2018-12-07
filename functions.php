<?php
add_theme_support( 'post-thumbnails' );

add_action('init', function() {
	pll_register_string('mytheme-description-1', 'Desription Line 1');
	pll_register_string('mytheme-description-2', 'Desription Line 2');
	pll_register_string('mytheme-since', 'Since');
	pll_register_string('mytheme-ago', 'ago');
	pll_register_string('mytheme-on', 'on');
	/* Register the navigation menu. */
	register_nav_menu( 'primary', 'Primary Menu' );
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);	
});
?>
