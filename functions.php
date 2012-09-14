<?php
register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'twentyten' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'twentyten' ),
		'before_widget' => '<p>',
		'after_widget' => '</p>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
?>