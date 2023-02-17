<?php

wp_enqueue_style('style-sadia',get_stylesheet_uri());
wp_enqueue_style('style-boot',get_template_directory_uri().'/assets/css/bootstrap.min.css');

wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support('custom-logo');
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

register_sidebar(array(
    'name'=>'Banner',
    'id'=>'banner',
    'before_widget'=>'',
    'after_widget'=>''
));
register_sidebar(array(
    'name'=>'Side Images',
    'id'=>'sideimg',
    'before_widget'=>'',
    'after_widget'=>''
));
register_sidebar(array(
    'name'=>'Side Video',
    'id'=>'sidevideo',
    'before_widget' => '<div id="%1$s" class="widget %2$s xx">',
	'after_widget'  => '</div>',
));
register_sidebar(array(
    'name'=>'Hero List',
    'id'=>'list',
    'before_widget' => '<div id="%1$s" class="widget %2$s zz">',
    'after_widget'=>'</div'

	
));

register_nav_menus(array(
    'Main_Menu'=>'Primary',
    'FM'=>'Footer'
) );