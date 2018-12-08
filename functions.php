<?php
add_theme_support( 'post-thumbnails' );

add_action('init', function() {
	/* Translation strings */
	pll_register_string('mytheme-description-1', 'Desription Line 1');
	pll_register_string('mytheme-description-2', 'Desription Line 2');
	pll_register_string('mytheme-since', 'Since');
	pll_register_string('mytheme-ago', 'ago');
	pll_register_string('mytheme-on', 'on');
	pll_register_string('mytheme-email-share-subject', 'I wanted you to see this site');
	pll_register_string('mytheme-email-share-message', 'Check out this site');
	pll_register_string('mytheme-share-text', 'Share via');
	pll_register_string('mytheme-design', 'Design');
	pll_register_string('mytheme-previous-post', 'Previous');
	pll_register_string('mytheme-next-post', 'Next');
	pll_register_string('mytheme-older-entries', 'Older Entries');
	pll_register_string('mytheme-newer-entries', 'Newer Entries');

	/* Register the navigation menu. */
	register_nav_menu( 'primary', 'Primary Navigation' );

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

add_filter( 'excerpt_length', function ( $length ) {
    return 20;
}, 55 );

/*  Excerpt ending */
add_filter( 'excerpt_more', function ( $more ) {
	return '&#46;&#46;&#46;';
});
?>
