<?php
register_nav_menus( array(
        'primary' => 'Navigation Menu',
        'footer' => 'Footer Menu'
    ) );
    add_theme_support( 'html5', array( 'search-form' ) );
if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' => 'Sidebarsss',
    'before_widget' => '<div class="widget-sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
    ));
?>